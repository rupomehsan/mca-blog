<template>
    <div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="text-capitalize">Change password</h5>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form @submit.prevent="submitHandler">
                            <template
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
                            </template>

                            <div class="form-group">
                                <button
                                    type="submit"
                                    class="btn btn-light btn-square px-5"
                                >
                                    <i class="icon-lock"></i> Chnage Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { user_setup_store } from "./setup/store";
import setup from "./setup";
import form_fields from "./setup/form_fields";
export default {
    data: () => ({
        route_prefix: "",
        form_fields,
        param_id: null,
        loader: false,
    }),
    created: async function () {
        this.route_prefix = setup.route_prefix;
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;
        this.form_fields.forEach((item) => {
            item.value = null;
        });
    },
    methods: {
        ...mapActions(user_setup_store, {
            user_update_profile: "user_update_profile",
        }),

        submitHandler: async function ($event) {
            let response = await this.user_update_profile($event.target);
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
            }
        },
    },
};
</script>

<style></style>
