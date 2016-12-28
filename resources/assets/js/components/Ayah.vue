<template>
    <div class="verse"id="'verse-'+id" >
        <div class="row">
            <div class="col-md-10">
                <h2 class="translation-ar"   v-if="hasValue(verseId, 'ar')">
                    <span class="verse-no">{{verseId}}.</span> {{content[verseId].ar}}

                </h2>
            </div>
            <div class="col-md-2">
                <audio :src="audioUrl" controls="controls"></audio>
            </div>
            <div class="col-md-12">
            <h3 class="translation" v-for="code in lang" v-if="hasValue(verseId, code)">{{content[verseId][code]}}</h3>
            </div>
        </div>

    </div>
</template>
<script>
    export default {
        props:['surahId','verseId', 'content', 'lang'],
        methods: {
            hasValue: function(verseId, langCode) {
                if(this.content[verseId] && this.content[verseId][langCode]) {
                    return true;
                }

                return false;
            }
        },
        computed: {
            audioUrl: function() {
                let file = ('00' + this.surahId).slice(-3) +('00' + this.verseId).slice(-3) + '.mp3';
                let url = '/quran/audio/abdur-rahmaan-as-sudais/verse-by-verse/' + file;
                return url;
            }
        }
    }
</script>

<style>
    .verse{
        border-top:2px solid #e3e3e3;
    }
    .verse .translation{
        border-top: 1px solid #EAF2F5;
        padding-top: 10px;
        margin-left: 25px;
        margin-top: 10px;
    }

    .verse .verse-no {
        margin-right: 10px;
        color: #0086B3;
    }
    .translation-ar {
        line-height: 2.0;
        font-size: 25px;
        margin-top: 10px;
        margin-bottom: 10px;

    }
    audio{
        width: 150px;
    }
</style>