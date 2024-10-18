<template>

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 py-2 d-none d-lg-block" style="background:#000000">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="ps-3">
                                <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>eduinntech.official@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end" style="color:#fff">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> AdibaCompose</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <router-link class="nav-item nav-link active" to="/">Home</router-link>                         
                            <router-link class="nav-item nav-link active" to="/report">Report</router-link>                         
                            <router-link class="nav-item nav-link active" to="/summery">Summery</router-link>                         
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <div class="d-flex flex-column ms-3">
                            <span>Please Contact @</span>
                            <a href="tel:+ 0123 456 7890"><span class="text-dark">01852012518</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

</template>

<script >

</script>

<style scoped>

</style>
