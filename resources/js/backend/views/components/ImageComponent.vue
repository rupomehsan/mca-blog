<template>
    <div>
        <input
            @change="preview"
            class="form-control"
            type="file"
            ref="input_files"
            :accept="accept"
            :class="classNames"
            :name="name"
            :multiple="multiple"
        />

        <div
            class="uploaded_image_preview my-2 d-flex gap-1 flex-wrap"
            v-show="images?.lenght"
        >
            <div>{{}}</div>
            <template v-if="multiple">
                <img
                    v-for="image in images"
                    :key="image"
                    :src="image ?? 'dummy.png'"
                    :class="image != '' ? 'border' : ''"
                    style="width: 200px; height: 80px; object-fit: cover"
                    alt="image"
                    target="_black"
                />
            </template>
            <template v-else>
                <img
                    v-if="images[0] !== ''"
                    :src="images[0]"
                    :class="images[0] != '' ? 'border' : ''"
                    style="width: 200px; height: 80px; object-fit: cover"
                    alt="image"
                    target="_black"
                />
            </template>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: {
            required: true,
            default: "selected_images",
        },
        multiple: {
            default: false,
        },
        classNames: {
            default: "form-control",
        },
        accept: {
            required: true,
        },
        images: {
            default: [],
            required: false,
        },
    },
    data: () => ({
        component_images: [],
    }),
    watch: {
        images: function (v) {
            // console.log(v);
            this.component_images = this.images;
        },
    },
    created() {},
    methods: {
        preview: function () {
            let that = this;
            // console.log("image", that);
            that.component_images = [];
            [...that.$refs.input_files.files].forEach((el) => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const base64String = e.target.result;
                    that.component_images.push(base64String);
                };
                reader.readAsDataURL(el);
            });
        },
    },
};
</script>

<style></style>
