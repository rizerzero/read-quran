<template>
    <div>

        <select v-model="selectedId" @change="fetchSurah">
            <option v-for="sr in surahList" :value="sr.id">{{sr.name}}</option>
        </select>
        <div v-if="surah">

            <h1>{{surah.name}}</h1>
            <ayah v-for="(verse, index) in surah.verses.data" :verse-id="index+1" :content= "verse"></ayah>

        </div>
    </div>
</template>
<script>
    import Ayah from './Ayah.vue'

    export default {
        mounted: function() {
            this.fetchSurahList();
            this.fetchSurah();
        },
        data: function() {
            return {
                surahList: [],
                selectedId: 1,
                surah: null
            };
        },
        methods : {
            fetchSurahList: function () {
                this.$http.get('/surah/all').then(response => {
                    console.log(response);
                    this.surahList = response.body;
                })
            },
            fetchSurah: function() {
                this.$http.get('/surah/'+ this.selectedId).then(response => {
                    console.log(response);
                this.surah = response.body.data;
                })
            }
        },
        components: {
            Ayah
        }
    }
</script>