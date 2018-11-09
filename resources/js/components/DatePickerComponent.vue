<template>
        <v-menu
          ref="menu1"
          :close-on-content-click="false"
          v-model="menu1"
          :nudge-right="40"
          lazy
          transition="scale-transition"
          offset-y
          full-width
          max-width="290px"
          min-width="290px"
        >
          <v-text-field
            slot="activator"
            v-model="dateFormatted"
            :rules="requis ? dateRules : []"
            :label="label"
            :name="name"
            persistent-hint
            @blur="date = parseDate(dateFormatted)"
            readonly
          ></v-text-field>
          <v-date-picker v-model="date" no-title @input="menu1 = false" ></v-date-picker>
        </v-menu>

</template>


<script>
  export default {

    props: {
           name: String,
           label: String,
           requis: {'type' : Boolean, 'default' : true }
    },


    data: vm => ({
      date: new Date().toISOString().substr(0, 10),
      dateFormatted: vm.formatDate(new Date().toISOString().substr(0, 10)),
      menu1: false,
      dateRules: [v => !!v || 'Name is required']
    }),

    computed: {
      computedDateFormatted () {
        return this.formatDate(this.date)
      }
    },

    watch: {
      date (val) {
        this.dateFormatted = this.formatDate(this.date)
      }
    },

    methods: {
      formatDate (date) {
        if (!date) return null

        const [year, month, day] = date.split('-')
        return `${day}/${month}/${year}`
      },
      parseDate (date) {
        if (!date) return null

        const [day, month, year] = date.split('/')
        return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`
      }
    }
  }
</script>