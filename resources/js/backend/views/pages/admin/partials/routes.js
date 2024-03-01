import Layout from "./Layout.vue";
import Dashboard from "../Dashboard.vue";

import user_routes from "../management/user/setup/routes";
import category_routes from "../management/Category/setup/routes";
import blog_routes from "../management/BlogManagement/Blog/setup/routes";
import course_routes from "../management/CourseManagement/Course/setup/routes";
import slider_routes from "../management/Slider/setup/routes";
import site_settings_routes from "../management/WebsiteSetting/setup/routes";
import contactus_routes from "../management/Contactus/setup/routes";

const routes = {
    path: "/",
    component: Layout,
    children: [
        {
            path: "dashboard",
            component: Dashboard,
            name: "adminDashboard",
        },
        user_routes,
        category_routes,
        blog_routes,
        course_routes,
        slider_routes,
        site_settings_routes,
        contactus_routes,
    ],
};

export default routes;
