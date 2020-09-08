<template>
    <svg xmlns="http://www.w3.org/2000/svg" class="loading" viewBox="0 0 24 24"><path d="M12 4V2A10 10 0 002 12h2a8 8 0 018-8z"/></svg>
</template>

<script>
export default {
    name: "Loading"
}
</script>

<style scoped>
.loading {
    height: 40px;
    weight: 40px;
    animation: loading 1s linear infinite;
}

@keyframes loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

</style>