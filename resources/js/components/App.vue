<template>
    <div>
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <router-link :to="{ name: 'home' }" class="navbar-brand">WebKurier.sk</router-link>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <router-link :to="{ name: 'home' }" class="nav-link">Domov</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link :to="{ name: 'eshopy' }" class="nav-link">E-Shopy</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link :to="{ name: 'pravidla' }" class="nav-link">Pravidlá</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link :to="{ name: 'kurieri' }" class="nav-link">Kuriéri</router-link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Viac</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item" v-if="isLoggedIn">
                                <a class="nav-link" style="cursor: pointer" @click="logout">Odhlásiť sa</a>
                            </li>
                            <li class="nav-item" v-else>
                                <router-link :to="{ name: 'login' }" class="nav-link">Prihlásiť sa</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="container-lg bg-primary text-white border-top border-dark rounded-bottom">
                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        Počet E-Shopov: 3
                    </div>
                    <div class="col-3 text-center">
                        Počet Kuriérov: 25
                    </div>
                    <div class="col-3 text-center">
                        Počet Pravidiel: 56
                    </div>
                    <div class="col-3 text-center">
                        Uptime: 99.8%
                    </div>
                </div>
            </div>
            <router-view></router-view>
        </div>
        <footer class="bg-light text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Technológie</h5>
                        <p>
                            Vytvorené pomocou PHP frameworku Laravel a front-end frameworku Vue.js
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 float-end">
                        <h5 class="text-uppercase">Autori</h5>
                        <p>
                            Systém vytvorili
                        </p>
                        <ul>
                            <li>
                                Bc. Richard Gahér
                            </li>
                            <li>
                                Bc. Jakub Hodoši
                            </li>
                            <li>
                                Bc. Peter Iždinský
                            </li>
                            <li>
                                Bc. Andrej Bíro
                            </li>
                            <li>
                                Bc. Martin Paučo
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3 bg-primary text-white">
                2021 ScrumTeamOne | DeliverySystemUKF | UKF
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        name: "App",
        data() {
            return {
                isLoggedIn: false,
            }
        },
        created() {
            if (window.Laravel.isLoggedin) {
                this.isLoggedIn = true
            }
        },
        methods: {
            logout(e) {
                console.log('ss')
                e.preventDefault()
                this.$axios.get('./sanctum/csrf-cookie').then(response => {
                    this.$axios.post('./api/logout')
                        .then(response => {
                            if (response.data.success) {
                                window.location.href = "/"
                            } else {
                                console.log(response)
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
            }
        },
    }
</script>
<style>

</style>
