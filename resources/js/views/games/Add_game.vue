 <template>
  <div>
  <v-btn fab bottom right color="pink" dark fixed @click.stop="dialog = !dialog">
    <v-icon>add</v-icon>
  </v-btn>

      <v-dialog v-model="dialog" width="800px">
          <v-card>
              <v-card-title class="grey lighten-4 py-4 title">
                  <span><i class="material-icons">games</i> Encoder un nouveau jeu</span>
              </v-card-title>


               <v-form ref="form" v-model="valid" lazy-validation>
                    <v-container grid-list-sm class="pa-4">
                       <v-layout row wrap>
                  <v-flex xs12>
                      <v-text-field name="name" v-model="name" :rules="nameRules" :counter="30" maxlength = "30" label="Nom du jeu" required></v-text-field>
                  </v-flex>
                  <v-flex xs12>
                      <v-select 
                            name="platform_id" 
                            :rules="[v => !!v || 'Item is required']" 
                            v-model="platform_id" 
                            :items="platforms" 
                            item-text="name" 
                            item-value="id" 
                            label="Plateforme">
                      </v-select>
                  </v-flex>
                  <v-flex xs12>
                      <datePicker name="release_date" :requis="true" label="Date de sortie"></datePicker>
                  </v-flex>
                  <v-flex xs12>
                      <v-checkbox name="is_finished" v-model="is_finished" label="Jeu terminé" value=""></v-checkbox>
                  </v-flex>
                   </v-layout>
                  </v-container>
              </v-form>

        
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn flat @click="clear" ripple>Nettoyer</v-btn>
            <v-btn flat color="primary" @click="dialog = false">Annuler</v-btn>
            <v-btn flat @click="submit">Ajouter</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>

<script>
import datePicker from '../../components/DatePickerComponent.vue';

export default {

    components : {
          datePicker 
    },

    data() {
        return {
         dialog: false,
         platforms : [],
         is_finished : false,
         valid: true,
         name: '',
         platform_id: '',
         nameRules: [
                      v => !!v || 'Name is required',
                      v => (v && v.length <= 30 && v.length >= 2) || 'Name must be less than 30 and greater than 2 characters'
                    ],
    
      }

    }, 


    mounted()
    {
       axios.get('/api/platforms')
       .then(response => this.platforms = response.data)
       .catch(function (error) {
       })

    },


      methods: {
      submit () {
        if (this.$refs.form.validate()) {
          // Native form submission is not yet supported
          axios.post('/api/games', {
                 'platform_id' : this.platform_id,
                 'name' : this.name,
                 'is_finished' : this.is_finished,
                 'release_date' : '08/10/2018',
                 'created_at' : '06/01/2018'
          })
          .then((response) => this.onSubmitData(response.data) )
          .then(() => {
              this.$refs.form.reset()
              this.dialog = false
          })
        }
      },

      clear () {
        this.$refs.form.reset()
      },

          onSubmitData(response) {
            this.$emit('sendinfo', response)
        }
    }
}

</script>


