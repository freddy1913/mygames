<template>
  <v-layout>
    <v-flex xs12 sm6 offset-sm3>
      <v-card>
        <v-img
          src="https://www.vooks.net/img/2015/07/super_mario_maker-1000x562.jpg"
          aspect-ratio="2.75"
        ></v-img>

        <v-card-title primary-title>
          <div>
            <h3 class="headline mb-0">My games</h3>
            <div>
              <p>My games est une application de test dans le cadre d'une recherche sur le dévelopement d'application spa (Single page).</p>
              
              <p>La fonctionalités principale est:</p>
              <ul>
                  <li>Ajout, création, supression, édition d'une liste de jeux vidéo.</li>
              </ul>

              <br>
              
              <p>L'application utilise les technologies suivantes:</p>
              <ul>
                <li>Vue JS - Framework front end.</li>
                <li>Laravel - Framework php back end.</li>
                <li>Vuetify - Framework d'interface de vuejs pour les composants ui.</li>
              </ul>

              <br>
              <p>Important à savoir</p>
              <code>let appurl = window.location.pathname.split('/');
                    appurl = '/'+appurl[1]+'/'+appurl[2]+'/';

                    window.axios = require('axios');

                    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
                    window.axios.defaults.baseURL = appurl;
              </code>
              
                
            </div>
          </div>
        </v-card-title>


      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>
  export default {
    data () {
      return {
        card_text: 'Lorem ipsum dolor sit amet, brute iriure accusata ne mea. Eos suavitate referrentur ad, te duo agam libris qualisque, utroque quaestio accommodare no qui. Et percipit laboramus usu, no invidunt verterem nominati mel. Dolorem ancillae an mei, ut putant invenire splendide mel, ea nec propriae adipisci. Ignota salutandi accusamus in sed, et per malis fuisset, qui id ludus appareat.'
      }
    }
  }
</script>
