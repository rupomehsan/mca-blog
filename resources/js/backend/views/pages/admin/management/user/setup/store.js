import { defineStore } from "pinia";

export const user_setup_store = defineStore("user_setup_store", {
    state: () => ({
        all_data: {},
        single_data: {},
        role_data: {},
        api: "users",
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
        },

        store: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post(this.api, formData);
            return response;
        },
        user_update_profile: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post("users/profile-update", formData);
            return response;
        },

        update: async function (form, id) {
            let formData = new FormData(form);
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

        // additional function
        // additional function
        bulk_actions: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, {
                action,
                data,
            });
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.all();
            }
        },
    },
});
