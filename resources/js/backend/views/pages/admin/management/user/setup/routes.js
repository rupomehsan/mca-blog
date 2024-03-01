import setup from ".";
import All from "../All.vue";
import ProfileUpdate from "../ProfileUpdate.vue";
import Layout from "./Layout.vue";

let route_prefix = setup.route_prefix;

const routes = {
    path: "user-profile",
    component: Layout,
    children: [
        {
            path: "",
            name: "ProfileUpdate",
            component: ProfileUpdate,
        },
    ],
};

export default routes;
