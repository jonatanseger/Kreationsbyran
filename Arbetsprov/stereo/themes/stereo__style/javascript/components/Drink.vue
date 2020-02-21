<template>
    <div
        @mouseover="isHidden = false"
        @mouseleave="isHidden = true"
        >
            <img width="100%" :src="drink.image" alt="drink image"/>
            <h1>{{ drink.title }}</h1>
            <p>{{ drink.description }}</p>
            <div class="center-element">
                <h1 v-if="!isHidden">{{ drink.price }} SEK</h1>
                <p v-if="!isHidden">{{ drink.ingredients }}</p>
            </div>
        </div>
</template>

<script>

export default {
    data() {
        return {
            isHidden: true
        }
    },
    props: [
        'drink'
    ]
}
</script>