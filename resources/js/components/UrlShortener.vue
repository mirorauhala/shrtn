<template>
    <div>
        <form @submit.prevent="shorten">
            <div class="form-group">
                <label for="url">URL to shorten</label>
                <input
                    type="url"
                    v-model="url"
                    class="form-control"
                    id="url"
                    placeholder="https://en.wikipedia.org/wiki/Google"
                >
            </div>
            <div class="form-group">
                <input
                    type="submit"
                    class="btn btn-primary"
                    value="Shorten!"
                >
            </div>
        </form>

        <div v-if="shortened">
            <h1><a :href="shortened" target="_blank">{{ shortened }}</a></h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'UrlShortener',
        data() {
            return {
                url: '',
                shortened: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            shorten() {
                axios.post('/api/shorten', {
                    url: this.url
                })
                .then(response => {
                    if(response.data.absoluteUrl) {
                        this.shortened = response.data.absoluteUrl
                    }
                })
            }
        }
    }
</script>
