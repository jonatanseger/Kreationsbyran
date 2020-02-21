<template>
    <div class="row justify-content-start">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3" 
        v-for="(data, index) in listObject"
            :key="index">
            <Drink :drink="data" />
        </div>
    </div>
</template>

<script>
import Drink from './Drink.vue'

export default {
    props: [
        'listObject'
    ],
    components: {
        Drink
    }
}
</script>