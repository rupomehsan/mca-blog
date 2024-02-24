import { defineStore } from "pinia";

export const common_setup_store = defineStore("common_setup_store", {
    state: () => ({
        all_data: {},
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        // additional function
        // additional function
        get_all_blog_categories: async function () {
            let response = await axios.get("categories?get_all=1&for=blog");
            response = response.data.data;
            this.all_blog_categories_data = response;
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
                this.set_blog_tags = [];
                return false;
            }
            let is_exist = this.set_blog_tags.some((data) => data === item);
            if (!is_exist) {
                this.set_blog_tags.push(item);
            }
        },
        remove_tag: async function (item) {
            this.set_blog_tags = this.set_blog_tags.filter(
                (data) => data != item
            );
        },
    },
});
