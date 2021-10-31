<template>
    <div class="container-xl p-3">
        <h2>Administračné prostredie</h2>
        <p class="small time text-capitalize"></p>
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Informácia</h4>
            <p class="mb-0">Od posledného prihlásenia bolo pridaných 45 pravidiel, 5 kuriérov, 1 E-Shop, 1 používateľ.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-5 col-sm-6 p-2">
                <div class="card border-primary mb-3">
                    <div class="card-header">Databáza</div>
                    <div class="card-body">
                        <h4 class="card-title">Štatistiky databázy</h4>
                        <p class="card-text">Počet tabuliek: 233</p>
                        <p class="card-text">Veľkosť databázy: 55 MB</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 p-2">
                <div class="card border-primary mb-3">
                    <div class="card-header">Server</div>
                    <div class="card-body">
                        <h4 class="card-title">Využitie servera</h4>
                        <p class="card-text">% CPU: 2%</p>
                        <p class="card-text">Zaplnenie úložiska: 55%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 p-2">
                <div class="card border-primary mb-3">
                    <div class="card-header">Správa systému</div>
                    <div class="card-body">
                        <h4 class="card-title">Akcie:</h4>
                        <button type="button" class="btn btn-info">Premazať cache</button>
                        <button type="button" class="btn btn-warning">Odhlásiť všetkých používateľov</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home",
        data() {
            return {
                //
            }
        },
        created() {
            //
        },
        methods: {
            //
        }
    }

    import $ from 'jquery';

    $(document).ready(function() {
        clockUpdate();
        setInterval(clockUpdate, 1000);
    })
    function clockUpdate() {
        let date = new Date();
        function addZero(x) {
            if (x < 10) {
                return x = '0' + x;
            } else {
                return x;
            }
        }
        let dayName = date.toLocaleDateString("sk-SK", { weekday: 'long' });
        let year = date.getFullYear();
        let day = date.getDate();
        let month = date.getMonth()+1;
        let h = addZero(date.getHours());
        let m = addZero(date.getMinutes());
        let s = addZero(date.getSeconds());
        $('.time').text(dayName + ' ' + day + '.' + month + '.' + year + ' ' + h + ':' + m + ':' + s);
    }

</script>

<style>

</style>
