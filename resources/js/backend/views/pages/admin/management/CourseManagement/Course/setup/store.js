import { defineStore } from "pinia";

export const course_setup_store = defineStore("course_setup_store", {
    state: () => ({
        all_data: {},
        all_course_categories_data: {},
        single_data: {},
        role_data: {},
        set_categories_data: [],
        set_course_tags: [],
        api: "courses",
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        all: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(this.api);
            }
            this.all_data = response.data.data;
        },

        get: async function (id) {
            let response = await axios.get(`${this.api}/${id}`);
            response = response.data.data;
            this.single_data = response;
            this.set_course_tags = [];
            this.set_categories_data = [];
        },

        store: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post(this.api, formData);
            return response;
        },

        update: async function (form, id) {
            let formData = new FormData(form);
            let final_category = this.set_categories_data.map(
                (item) => item.id
            );
            formData.append(
                "course_category_id",
                JSON.stringify(final_category)
            );
            formData.append("tags", JSON.stringify(this.set_course_tags));
            let response = await axios.post(
                `${this.api}/${id}?_method=PATCH`,
                formData
            );
            return response;
        },

        delete: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(`${this.api}/${id}`);
                window.s_alert("Data deleted");
                this.all();
                console.log(response.data);
            }
        },
        bulk_action: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, {
                action,
                data,
            });
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.all();
            }
        },

        // additional function
        // additional function
        get_all_course_categories: async function () {
            let response = await axios.get("categories?get_all=1&for=course");
            response = response.data.data;
            this.all_course_categories_data = response;
        },

        set_categories: async function (item) {
            if (item == "empty") {
                this.set_categories_data = [];
                return false;
            }
            let is_exist = this.set_categories_data.some(
                (data) => data.id === item.id
            );
            if (is_exist) {
                this.set_categories_data = this.set_categories_data.filter(
                    (data) => data.id !== item.id
                );
            } else {
                let categoryData = {
                    id: item.id,
                    name: item.title,
                };
                this.set_categories_data.push(categoryData);
            }
        },

        set_tags: async function (item) {
            if (item == "empty") {
                this.set_course_tags = [];
                return false;
            }
            let is_exist = this.set_course_tags.some((data) => data === item);
            if (!is_exist) {
                this.set_course_tags.push(item);
            }
        },
        remove_tag: async function (item) {
            this.set_course_tags = this.set_course_tags.filter(
                (data) => data != item
            );
        },
    },
});
