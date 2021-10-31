<template>
    <div class="container-xl p-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h2>Zoznam kuriérov v databáze</h2>
                <p class="small">Počet kuriérov: 25</p>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-success float-end">Vytvoriť kuriéra</button>
            </div>
        </div>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Úspech!</h4>
            <p class="mb-0">Vytvoril si kuriéra DPD. Všetky údaje boli úspešne uložené.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-6">
                <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Názov</th>
                        <th class="float-right">Akcia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>UPS</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>GLS</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DPD</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</template>

<script>
export default {

}
</script>

<style>

</style>
