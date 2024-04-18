const app = Vue.createApp({
  data() {
    return {
      discs: [],
    };
  },
  created() {
    // Effettua una richiesta GET per ottenere i dischi dal server
    axios
      .get("http://localhost/php-dischi-json/dischi.php")
      .then((response) => {
        // Assegna i dati ricevuti alla proprietà "discs"
        this.discs = response.data;
      });
  },
});

// Monta l'applicazione Vue sull'elemento con id "app"
app.mount("#app");
