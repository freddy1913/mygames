<template>
  <v-app id="inspire">
    <v-navigation-drawer
      :clipped="$vuetify.breakpoint.lgAndUp"
      v-model="drawer"
      fixed
      app
    >
      <v-list dense>
        <template v-for="item in items">
          <v-layout
            v-if="item.heading"
            :key="item.heading"
            row
            align-center
          >
          </v-layout>

          <v-list-tile v-else :key="item.text" ripple :to="{ name: item.text } ">
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                  <v-list-tile-title>{{ item.text }} </v-list-tile-title>  
            </v-list-tile-content>
          </v-list-tile>
        </template>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar
      :clipped-left="$vuetify.breakpoint.lgAndUp"
      color="indigo darken-3"
      dark
      app
      fixed
    >
      <v-toolbar-title style="width: 300px" class="ml-0 pl-3">
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        <span class="hidden-sm-and-down">My Games</span>
      </v-toolbar-title>
   
    </v-toolbar>
    
  <v-content>  
  <v-container fluid fill-height>
        <v-layout>
          <v-flex xs12>
                   <v-fade-transition mode="out-in">
                         <router-view></router-view>
                  </v-fade-transition>
           </v-flex>
        </v-layout>
      </v-container>
  </v-content>   
    

  </v-app>
</template>

<script>

  export default {

    data: () => ({
      dialog: false,
      drawer: null,
      items: [
        { icon: 'videogame_asset', text: 'Jeux' },
        { icon: 'info', text: 'About' }

      ]
    }),
    props: {
      source: String
    }
  }
</script>