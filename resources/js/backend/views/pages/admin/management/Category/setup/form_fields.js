export default [
    {
        name: "title",
        label: "Enter your  name",
        type: "text",
        value: "",
    },
    {
        name: "for",
        label: "Cateogry for",
        type: "select",
        value: "",
        multiple: false,
        data_list: [
            {
                label: "Blog",
                value: "blog",
            },
            {
                label: "Course",
                value: "course",
            },
        ],
    },

    {
        name: "image",
        label: "Upload your image",
        type: "file",
        value: "",
        multiple: false,
    },
];
