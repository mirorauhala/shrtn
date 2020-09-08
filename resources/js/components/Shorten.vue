<template>
    <div>
        <form
            class="relative mb-5"
            @submit.prevent="shorten"
            autocomplete="off"
        >
            <input
                type="url"
                v-model="url"
                class="input"
                id="url"
                placeholder="https://en.wikipedia.org/wiki/Google"
            >
            <button
                type="submit"
            >
                <span class="sr-only">Shorten!</span>
                <svg class="not-sr-only" width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 8h14M8 1l7 7-7 7"/></g></svg>
            </button>
        </form>

        <link-card
            v-if="shortened"
            :shortLink="shortened"
            :longLink="shortened + '/stats'"
        >
        </link-card>

        <link-card-loading v-else>
            <div class="flex justify-center">
                <Loading v-if="loading"></Loading>
            </div>
        </link-card-loading>
    </div>
</template>

<script>
    export default {
        name: 'shorten',
        data() {
            return {
                url: '',
                shortened: '',
                loading: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            shorten() {
                this.loading = true;
                axios.post('/api/shorten', {
                    url: this.url
                })
                .then(response => {
                    this.loading = false
                    if(response.data.absoluteUrl) {
                        this.shortened = response.data.absoluteUrl
                    }
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

input {
    height: 3rem;
    width: 100%;
    border-radius: 20px;
    padding: 10px 20px;
    box-shadow: 0 5px 14px rgba(0,0,0,.1);

    &:active,
    &:focus {
        outline: none;
    }
}

button {
    display: flex;
    position: absolute;
    justify-content: center;
    align-items: center;
    top: 7px;
    right: 10px;
    width: 35px;
    height: 35px;
    background-color: #F4005B;
    border-radius: 1000px;
}
</style>
