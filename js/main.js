"use strict";

const app = Vue.createApp({
    data() {
        return {
            albumsList: [],
        }
    },
    mounted() {
        // Effettuo una chiamata al server per recuperare la lista degli album
        let url = "api/album_server.php"
        axios.get(url).then((response) => {
            this.albumsList = response.data;
        })
    }
})

app.mount("#app");