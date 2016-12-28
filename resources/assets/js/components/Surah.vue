<template>
    <div>
        <div class="row">
            <div class="col-md-4">
                <label>Select Surah</label>
                <multiselect v-model="selectedSurah"
                             deselect-label="Can't remove this value"
                             track-by="name"
                             label="name"
                             placeholder="Select one"
                             :options="surahList"
                             :searchable="false"
                             @select="fetchSurah"
                             :allow-empty="false">
                </multiselect>
            </div>
            <div class="col-md-5">
                <label>Select Language</label>
                <multiselect v-model="selectedLang"
                             :options="langOptions"
                             placeholder="Pick some"
                             track-by="name"
                             label="name"
                             :searchable="true">
                </multiselect>
            </div>
            <div class="col-md-3">
                <label></label>
                <div class="checkbox">
                    <label>
                        <input v-model="hideEn" type="checkbox"> Hide English

                    </label>
                </div>

            </div>
        </div>


        <div v-if="surah">
            <div class="surah text-center">
                <h1 class="surah-title text-success">{{surah.name}}</h1>
                <h3 class="surah-title-en">{{surah.english_title}}</h3>

            </div>

            <ayah v-for="(verse, index) in surah.verses.data"
                  :surah-id="surah.id"
                  :verse-id="index+1"
                  :content= "verse"
                  :lang="translatedTo"></ayah>
        </div>
    </div>
</template>
<script>
    import Ayah from './Ayah.vue'
    import Multiselect from 'vue-multiselect'

    export default {
        mounted: function() {
            this.fetchSurahList();
            this.fetchSurah();
            this.fetchLaguages();
        },
        data: function() {
            return {
                surahList: [],
                surah: null,
                selectedLang: null,
                langOptions: [],
                selectedSurah: {id: 1, name: "001. Al-Fatihah"},
                hideEn: false
            };
        },
        methods : {
            fetchSurahList: function () {
                this.$http.get('/surah/all').then(response => {
                    console.log(response);
                    let allSurah = response.body;
                    this.surahList = allSurah.map((item)=>{
                                item.name = ("00" + item.id).slice(-3)+'. '+ item.name;
                                return item;
                            });
                })
            },
            fetchSurah: function(selectedValue = null) {
                if(! selectedValue) {
                    selectedValue = this.selectedSurah;
                }

                this.$http.get('/surah/'+ selectedValue.id).then(response => {
                    console.log(response);
                    this.surah = response.body.data;
                })
            },
            fetchLaguages: function() {
                this.$http.get('/language/').then(response => {
                    console.log(response);
                    this.langOptions = response.body.data;
                })
            }
        },
        computed: {
          translatedTo: function() {
              let langs =[];
              if(this.selectedLang) {
                  langs.push(this.selectedLang.code);
              }
              if(! this.hideEn) {
                  langs.unshift('en')
              }
              return langs;
          }
        },
        components: {
            Ayah,
            Multiselect
        }
    }
</script>