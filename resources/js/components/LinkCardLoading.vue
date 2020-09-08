<template>
    <div class="linkCardLoading">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: 'LinkCardLoading',

    }
</script>

<style lang="scss" scoped>
.linkCardLoading {
    height: 78px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 9px;
    border: 3px dashed #e6e6e6;
}
</style>
