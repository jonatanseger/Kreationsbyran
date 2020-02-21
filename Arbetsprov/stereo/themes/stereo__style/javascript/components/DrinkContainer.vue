<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <app-welcome class="col-sm-12 col-md-10 col-lg-8 col-xl-5"></app-welcome>
        </div>
        <BuildDrink :listObject="objects.slice(0, amount)"/>
    </div>
</template>

<script>
import drinkInfo from '../data/copy.json'

import BuildDrink from './BuildDrink.vue'

export default {
    data: () => {
        return {
            objects: drinkInfo
        }
    },
    components: {
        BuildDrink
    },
    props: [
        'amount'
    ]
}
</script>