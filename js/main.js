const app = Vue.createApp({
    data() {
        return {
            albumsList: [],
            formAddAlbum: {},
        }
    },
    methods: {
        // Effettuo una chiamata al server per inserire un nuovo album alla lista
        addNewAlbum() {
            let url = "api/album/add.php"
            axios.post(url, this.formAddAlbum, {
                headers: { "Content-Type": "multipart/form-data" }
            }).then((response) => {
                this.albumsList = response.data;
            })    

        }
    },
    mounted() {
        // Effettuo una chiamata al server per recuperare la lista degli album
        let url = "api/album.php"
        axios.get(url).then((response) => {
            this.albumsList = response.data;
        })
    }
})

app.mount("#app");