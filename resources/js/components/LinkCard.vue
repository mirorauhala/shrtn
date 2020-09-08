<template>
    <div class="linkCard">
        <div class="linkCard__heading">
            <h2><a class="text-black no-underline":href="url.shortUrl">{{ url.baseUrl }}/<span class="text-pink-shrtn">{{ url.hash }}</span></a></h2>
            <a class="text-gray-500 no-underline" :href="url.shortUrl" v-text="url.url"></a>
        </div>
        <a class="linkCard__copy" href="#" :id="'copy-' + id" :data-clipboard-text="url.shortUrl">
            <span class="sr-only">Copy short link</span>
            <svg class="not-sr-only" width="26" height="23" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><rect x="8.4" y="5.95" width="15.6" height="14.95" rx="2"/><path d="M3.6 14.95H2.4c-1.325 0-2.4-1.03-2.4-2.3V2.3C0 1.03 1.075 0 2.4 0h10.8c1.325 0 2.4 1.03 2.4 2.3v1.15"/></g></svg>
        </a>
    </div>
</template>

<script>
    import ClipboardJS from 'clipboard'
    export default {
        name: 'LinkCard',
        props: ['url'],

        data() {
            return {
                id: '',
            }
        },

        mounted() {
            this.id = this._uid;

            new ClipboardJS('#copy-'+ this.id);
        },
    }
</script>

<style lang="scss" scoped>
.linkCard {
    display: flex;
    flex-grow: 1;
    border-radius: 9px;
    @apply shadow-md bg-white;
}

.linkCard__heading {
    flex-grow: 1;
    padding: .75rem 1rem;
}

h2 {
    font-weight: bold;
    @apply text-xl;
}

.linkCard__copy {
    display: flex;
    margin-left: auto;
    width: 50px;
    align-items: center;
}
</style>
