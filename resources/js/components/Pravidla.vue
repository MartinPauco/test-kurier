<template>
    <div class="container-xl p-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <h2>Zoznam pravidiel v databáze</h2>
                <p class="small">Počet pravidiel: 56</p>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-success float-end">Vytvoriť pravidlo</button>
            </div>
        </div>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Error!</h4>
            <p class="mb-0">Pravidlo nebolo pridané! Error kód: 0x222AC (ID už existuje).</p>
        </div>
        <form class="d-inline">
            <input class="form-control me-sm-2" type="text" placeholder="Kľúčové slovo">
            <div class="form-group">
                <select class="form-select" id="exampleSelect1">
                    <option disabled selected>E-Shop</option>
                    <option>Alza.sk</option>
                    <option>Datart</option>
                    <option>Mall</option>
                </select>
            </div>
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Odoslať</button>
        </form>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-6">
                <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Názov</th>
                        <th class="float-right">Vlastnosť</th>
                        <th class="float-right">Cieľ</th>
                        <th class="float-right">E-Shop</th>
                        <th class="float-right">Akcia</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ak je tovar</td>
                        <td>{topánky, ponožky, vložky}</td>
                        <td>Vyber kuriéra DPD</td>
                        <td>Alza.sk</td>
                        <td class="float-right"><button type="button" class="btn btn-info">Upraviť</button><button type="button" class="btn btn-danger">Vymazať</button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ak je krajina</td>
                        <td>{Slovensko}</td>
                        <td>Vyber kuriéra GLS</td>
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
