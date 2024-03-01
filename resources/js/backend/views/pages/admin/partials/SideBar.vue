<template>
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper">
        <div class="brand-logo">
            <router-link
                :to="{ name: `adminDashboard` }"
                class="d-flex align-items-center"
            >
                <img
                    src="frontend/images/logo.png"
                    class="logo-icon"
                    alt="logo icon"
                />
                <h5 class="logo-text">MCA Admin Panel</h5>
            </router-link>
            <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
        </div>

        <ul class="metismenu" id="menu">
            <li>
                <router-link
                    :to="{ name: `adminDashboard` }"
                    class="border"
                    href="javascript:void();"
                >
                    <div class="parent-icon">
                        <i class="zmdi zmdi-view-dashboard"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </router-link>
            </li>
            <li class="menu-label">Managements</li>

            <li
                class="mm-collapse"
                style="border: 1px solid rgba(128, 128, 128, 0.267)"
            >
                <router-link
                    :to="{ name: `AllCategory` }"
                    class=""
                    href="javascript:void();"
                >
                    <div class="menu-title">Category</div>
                </router-link>
            </li>
            <li
                class="mm-collapse"
                style="border: 1px solid rgba(128, 128, 128, 0.267)"
            >
                <router-link
                    :to="{ name: `AllSlider` }"
                    class=""
                    href="javascript:void();"
                >
                    <div class="menu-title">Slider</div>
                </router-link>
            </li>

            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Blog Management`"
                :menus="[
                    {
                        route_name: `AllBlog`,
                        title: `Blogs`,
                    },
                ]"
            />
            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Course Management`"
                :menus="[
                    {
                        route_name: `AllCourse`,
                        title: `Courses`,
                    },
                ]"
            />
            <li class="menu-label">Wbsite Managements</li>
            <li
                class="mm-collapse"
                style="border: 1px solid rgba(128, 128, 128, 0.267)"
            >
                <router-link
                    :to="{ name: `AllContactus` }"
                    class=""
                    href="javascript:void();"
                >
                    <div class="menu-title">Contact us</div>
                </router-link>
            </li>
            <li
                class="mm-collapse"
                style="border: 1px solid rgba(128, 128, 128, 0.267)"
            >
                <router-link
                    :to="{ name: `AllWebsiteSetting` }"
                    class=""
                    href="javascript:void();"
                >
                    <div class="menu-title">Site Settings</div>
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
import { mapActions } from "pinia";
import { auth_store } from "../../../../store/auth_store";
import SideBarDropDownMenus from "./SideBarDropDownMenus.vue";
import SideBarSingleMenu from "./SideBarSingleMenu.vue";
export default {
    components: { SideBarDropDownMenus, SideBarSingleMenu },
    methods: {
        ...mapActions(auth_store, ["log_out"]),
        logout_submit: function () {
            let confirm = window.confirm("logout");
            if (confirm) {
                this.log_out();
            }
        },
    },
};
</script>

<style></style>
