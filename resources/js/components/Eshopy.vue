<template>
<div class="container-xl p-3">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h2>Zoznam E-Shopov v databáze</h2>
            <p class="small">Počet eshopov: 3</p>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-success float-end">Vytvoriť E-Shop</button>
        </div>
    </div>
    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <h4 class="alert-heading">Pozor!</h4>
        <p class="mb-0">Vymazal si E-Shop 'Datacomp.sk'. Všetky údaje boli stratené.</p>
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
            <td>Alza</td>
            <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Datart</td>
            <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Mall</td>
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
