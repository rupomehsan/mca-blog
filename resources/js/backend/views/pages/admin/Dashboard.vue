<template>
    <div class="container-fluid">
        <!--Start Dashboard Content-->

        <div class="card mt-3">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ totalVisitor }}
                                <span class="float-right"
                                    ><i class="fa fa-users"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Visitors
                                <span class="float-right"
                                    >+4.2%
                                    <i class="zmdi zmdi-long-arrow-up"></i
                                ></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ totalBlog }}
                                <span class="float-right"
                                    ><i class="fa fa-book"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Blog Posts
                                <span class="float-right"
                                    >+1.2%
                                    <i class="zmdi zmdi-long-arrow-up"></i
                                ></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ totalCourse }}
                                <span class="float-right"
                                    ><i class="fa fa-eye"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Course
                                <span class="float-right"
                                    >+5.2%
                                    <i class="zmdi zmdi-long-arrow-up"></i
                                ></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">
                                {{ totalCategory }}
                                <span class="float-right"
                                    ><i class="fa fa-envira"></i
                                ></span>
                            </h5>
                            <div class="progress my-3" style="height: 3px">
                                <div
                                    class="progress-bar"
                                    style="width: 55%"
                                ></div>
                            </div>
                            <p class="mb-0 text-white small-font">
                                Total Category
                                <span class="float-right"
                                    >+2.2%
                                    <i class="zmdi zmdi-long-arrow-up"></i
                                ></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</template>

<script>
export default {
    data: () => ({
        totalVisitor: 0,
        totalBlog: 0,
        totalCourse: 0,
        totalCategory: 0,
    }),
    created: function () {
        this.getDashboardAnalytics();
    },
    methods: {
        async getDashboardAnalytics() {
            let response = await axios.get("dashboard-analytics");
            response = response.data;
            if (response.status == "success") {
                this.totalVisitor = response.data.totalVisitor;
                this.totalBlog = response.data.totalBlog;
                this.totalCourse = response.data.totalCourse;
                this.totalCategory = response.data.totalCategory;
            }
        },
    },
};
</script>

<style></style>
