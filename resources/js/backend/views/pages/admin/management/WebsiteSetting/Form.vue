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
                        <router-link class="btn btn-outline-warning btn-sm" :to="{ name: `All${route_prefix}` }">All {{
                            route_prefix }}</router-link>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" id="formField">
                        <div class="col-md-12" v-for="(form_field, index) in form_fields" :key="index">
                            <common-input :label="form_field.label" :type="form_field.type" :name="form_field.name"
                                :multiple="form_field.multiple" :value="form_field.value"
                                :data_list="form_field.data_list" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-square px-5">
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
import { website_setting_setup_store } from "./setup/store";
import setup from "./setup";
import form_fields from "./setup/form_fields";

export default {
    data: () => ({
        route_prefix: "",
        form_fields,
        param_id: null,
    }),
    created: async function () {
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;
        await this.get_all_data();
        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            this.disableInputField()
            if (this.single_data) {
                this.form_fields.forEach((field, index) => {
                    this.changeInputField(field)
                    Object.entries(this.single_data).forEach((value) => {
                        if (field.name == value[0]) {
                            this.form_fields[index].value = value[1];
                        }

                        if (
                            field.name == "field_value" &&
                            value[0] == "field_value"
                        ) {
                            // $("#field_value").summernote("code", value[1]);
                        }
                    });
                });
                if (this.single_data.is_image && this.single_data.is_image == 1) {

                    let target = document.getElementById('formField')
                    // let summerNoteHide = document.querySelector('[class="note-editor note-frame card"]')
                    // summerNoteHide.closest('.col-md-12').classList.add('d-none')
                    let field = document.getElementById('field_value')
                    field.parentElement?.parentElement?.classList.add('d-none')

                    let element = `
                              <img src="${this.single_data.field_value}" height='60' width='100' style=object-fit:contain>
                              <div class="form-group">
                                <label for="">Upload image</label>
                                <div class="mt-1 mb-3">
                                    <input class="form-control form-control-square mb-2" type="file" name="image" id="field_title">
                                </div>
                              </div>

                            `
                    let tempContainer = document.createElement('div');
                    tempContainer.classList.add('col-md-12')
                    tempContainer.innerHTML = element;
                    target.appendChild(tempContainer);

                }
            }
        } else {
            this.form_fields.forEach((item) => {
                item.value = "";
            });
        }
    },
    methods: {
        ...mapActions(website_setting_setup_store, {
            get_all_data: "all",
            get_single_data: "get",
            store_data: "store",
            update_data: "update",
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                // this.setSummerEditor();
                let response = await this.update_data(
                    $event.target,
                    this.param_id
                );
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                // this.setSummerEditor();
                let response = await this.store_data($event.target);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            }
        },
        setSummerEditor() {
            var markupStr = $("#field_value").summernote("code");
            var target = document.createElement("input");
            target.setAttribute("name", "field_value");
            target.value = markupStr;
            document.getElementById("field_value").appendChild(target);
        },
        disableInputField() {
            let target = document.querySelector('[name="field_title"]')
            target.setAttribute('disabled', true)
        },
        changeInputField(item) {
            // console.log(item);
        }
    },

    computed: {
        ...mapState(website_setting_setup_store, {
            single_data: "single_data",
            all_data: "all_data",
        }),
    },
};
</script>
