<template>
    <div id="app">
        <app-header></app-header>
            <DrinkContainer :amount="showX" />
            <button class="col-xl-12" @click="showMore" v-show="showX < 17">SHOW MORE</button>
        <app-footer></app-footer>
    </div>
</template>

<script>
import DrinkContainer from './components/DrinkContainer.vue'

export default {
    data () {
        return {
            showX: 6
        }
    },
    methods: {
        showMore() {
            this.showX += 4
        }
    },
    components: {
        DrinkContainer
    }
}
</script>