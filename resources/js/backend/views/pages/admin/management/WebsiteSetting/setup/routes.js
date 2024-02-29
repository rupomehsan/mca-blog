import setup from ".";
import All from "../All.vue";
import Form from "../Form.vue";
import ContactUs from "../ContactUs.vue";
import Layout from "./Layout.vue";

let route_prefix = setup.route_prefix;

const routes =
{
    path: 'website-setting',
    component: Layout,
    children: [
        {
            path: '',
            name: "All" + route_prefix,
            component: All,
        },
        {
            path: "create",
            name: "Create" + route_prefix,
            component: Form,
        },
        {
            path: "contact-us",
            name: "ContactUs",
            component: ContactUs,
        },
    ]
};


export default routes;
