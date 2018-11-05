 <template>
 <div>
 <v-btn
      fab
      bottom
      right
      color="pink"
      dark
      fixed
      @click.stop="dialog = !dialog"
    >
      <v-icon>add</v-icon>
    </v-btn>
    <v-dialog v-model="dialog" width="800px">
      <v-card>
        <v-card-title
          class="grey lighten-4 py-4 title"
        >
          Encoder un nouveau jeu
        </v-card-title>
        <v-container grid-list-sm class="pa-4">
          <v-layout row wrap>
            <v-flex xs12 align-center justify-space-between>
              <v-layout align-center>
                <v-text-field
                  placeholder="Name"
                ></v-text-field>
              </v-layout>
            </v-flex>
            <v-flex xs12>
                <v-select
                :items="platforms"
                 item-text="name"
                 item-value="id"
                label="Plateforme"
                ></v-select>
            </v-flex>
            <v-flex xs12>
            <v-text-field
            slot="activator"
            v-model="dateFormatted"
            label="Date"
            hint="MM/DD/YYYY format"
            persistent-hint
            prepend-icon="event"
            @blur="date = parseDate(dateFormatted)"
          ></v-text-field>
            </v-flex>

            <v-flex xs12>
            <v-checkbox v-model="is_finished" label="Jeu terminé" value=""></v-checkbox>
            </v-flex>
          </v-layout>
        </v-container>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn flat color="primary" @click="dialog = false">Annuler</v-btn>
          <v-btn flat @click="dialog = false">Ajouter</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
</div>
    </template>

<script>
export default {

    data() {
        return {
         dialog: false,
         platforms : [],
         is_finished : false
    
      }

    }, 


    mounted()
    {
       axios.get('/api/platforms')
       .then(response => this.platforms = response.data)
       .catch(function (error) {
       })

    }
}

</script>


