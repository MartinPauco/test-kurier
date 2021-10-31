<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form border-right mt-4 p-4">
                    <form action="" method="post" class="row g-3">
                        <h4 class="text-center">Vitaj späť!</h4>
                        <div class="col-12">
                            <label for="username">Používateľské meno</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Používateľské meno">
                        </div>
                        <div class="col-12">
                            <label for="password">Heslo</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Heslo">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Zapamätať</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 offset-4">
                            <button type="submit" class="btn btn-primary" @click="handleSubmit">Prihlásiť sa</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Nemáte účet? <router-link :to="{ name: 'register' }">Registrovať sa</router-link></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            error: null
        }
    },
    methods: {
        handleSubmit(e) {
            e.preventDefault()
            if (this.password.length > 0) {
                this.$axios.get('./sanctum/csrf-cookie').then(response => {
                    this.$axios.post('./api/login', {
                        email: this.email,
                        password: this.password
                    })
                    .then(response => {
                        console.log(response.data)
                        if (response.data.success) {
                            this.$router.go('/')
                        } else {
                            this.error = response.data.message
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
                })
            }
        }
    },
    beforeRouteEnter(to, from, next) {
        if (window.Laravel.isLoggedin) {
            return next('home');
        }
        next();
    }
}
</script>

<style>

</style>
