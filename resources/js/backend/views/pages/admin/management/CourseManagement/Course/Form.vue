<template>
    <div>
        <form @submit.prevent="submitHandler">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="text-capitalize">
                        {{ param_id ? "Update" : "Create" }} new
                        {{ route_prefix }}
                    </h5>
                    <div>
                        <router-link
                            class="btn btn-outline-warning btn-sm"
                            :to="{ name: `All${route_prefix}` }"
                            >All {{ route_prefix }}</router-link
                        >
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div
                            class="col-md-12"
                            v-for="(form_field, index) in form_fields"
                            :key="index"
                        >
                            <common-input
                                :label="form_field.label"
                                :type="form_field.type"
                                :name="form_field.name"
                                :multiple="form_field.multiple"
                                :value="form_field.value"
                                :data_list="form_field.data_list"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-light btn-square px-5"
                        >
                            <i class="icon-lock"></i> Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { course_setup_store } from "./setup/store";
import setup from "./setup";
import form_fields from "./setup/form_fields";

export default {
    data: () => ({
        route_prefix: "",
        form_fields,
        param_id: null,
        modal_show: false,
        loaded: false,
    }),
    created: async function () {
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;

        await this.get_all_course_categories();
        await this.get_all_data();

        this.loaded = true;

        if (
            this.all_course_categories_data &&
            this.all_course_categories_data.length
        ) {
            this.form_fields.forEach((field) => {
                if (field.name == "category_id") {
                    field.data_list = [];
                    this.all_course_categories_data.forEach((data) => {
                        let dataList = {};
                        (dataList.label = data.title),
                            (dataList.value = data.id);
                        field.data_list.push(dataList);
                    });
                }
            });
        }

        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.form_fields.forEach((field, index) => {
                    Object.entries(this.single_data).forEach((value) => {
                        if (field.name == value[0]) {
                            this.form_fields[index].value = value[1];
                        }
                        if (
                            field.name == "description" &&
                            value[0] == "description"
                        ) {
                            $("#description").summernote("code", value[1]);
                        }
                    });
                });
            }
        } else {
            this.form_fields.forEach((item) => {
                item.value = "";
            });
        }
    },
    methods: {
        ...mapActions(course_setup_store, {
            get_all_data: "all",
            get_single_data: "get",
            store_data: "store",
            update_data: "update",

            set_categories: "set_categories",
            set_tags: "set_tags",
            get_all_course_categories: "get_all_course_categories",
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                this.setSummerEditor();
                let response = await this.update_data(
                    $event.target,
                    this.param_id
                );
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                this.setSummerEditor();

                let response = await this.store_data($event.target);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            }
        },

        setSummerEditor() {
            var markupStr = $("#description").summernote("code");
            var target = document.createElement("input");
            target.setAttribute("name", "description");
            target.value = markupStr;
            document.getElementById("description").appendChild(target);
        },
    },

    computed: {
        ...mapState(course_setup_store, {
            single_data: "single_data",
            all_data: "all_data",
            all_course_categories_data: "all_course_categories_data",
            set_categories_data: "set_categories_data",
            set_blog_tags: "set_blog_tags",
        }),
    },
};
</script>
