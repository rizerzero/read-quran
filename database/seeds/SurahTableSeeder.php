<?php

use Illuminate\Database\Seeder;

class SurahTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Surah::insert($this->allSurah);
    }

    private $allSurah = [
        ['name'=>'Al-Fatihah', 'type'=>'Meccan', 'english_title'=>'The Opening'],
        ['name'=>'Al-Baqarah', 'type'=>'Medinan', 'english_title'=>'The Calf, The Cow'],
        ['name'=>'Ale Imran', 'type'=>'Medinan', 'english_title'=>'The Family of Imran, The House of \'Imrán'],
        ['name'=>'An-Nisa', 'type'=>'Medinan', 'english_title'=>'The Women'],
        ['name'=>'Al-Ma\'idah', 'type'=>'Medinan', 'english_title'=>'The Food, The Repast, The Table'],
        ['name'=>'Al-An\'am', 'type'=>'Meccan', 'english_title'=>'The Cattle'],
        ['name'=>'Al-A\'raf', 'type'=>'Meccan', 'english_title'=>'The Heights, The Faculty of Discernment'],
        ['name'=>'Al-Anfal', 'type'=>'Medinan', 'english_title'=>'The Spoils of War'],
        ['name'=>'At-Tawbah', 'type'=>'Medinan', 'english_title'=>'The Repentance'],
        ['name'=>'Yunus', 'type'=>'Meccan', 'english_title'=>'Yunus (\'Alaihi Salam)'],
        ['name'=>'Hud', 'type'=>'Meccan', 'english_title'=>'Hud (\'Alaihis Salaam)'],
        ['name'=>'Yusuf', 'type'=>'Meccan', 'english_title'=>'Joseph (\'Alaihis Salaam)'],
        ['name'=>'Ar-Ra\'d', 'type'=>'Medinan', 'english_title'=>'The Thunder'],
        ['name'=>'Ibraheem', 'type'=>'Meccan', 'english_title'=>'Abraham (\'Alaihis Salaam)'],
        ['name'=>'Al-Hijr', 'type'=>'Meccan', 'english_title'=>'The Rocky Tract, The Stoneland, The Rock City, Al-Hijr'],
        ['name'=>'An-Nahl', 'type'=>'Meccan', 'english_title'=>'The Honey Bees, The Bee'],
        ['name'=>'Al-Isra', 'type'=>'Meccan', 'english_title'=>'The Night Journey'],
        ['name'=>'Al-Kahf', 'type'=>'Meccan', 'english_title'=>'The Cave'],
        ['name'=>'Maryam', 'type'=>'Meccan', 'english_title'=>'Mary'],
        ['name'=>'Ta-Ha', 'type'=>'Meccan', 'english_title'=>'Ta-Ha'],
        ['name'=>'Al-Anbiya', 'type'=>'Meccan', 'english_title'=>'The Prophets'],
        ['name'=>'Al-Hajj', 'type'=>'Medinan', 'english_title'=>'The Pilgrimage'],
        ['name'=>'Al-Mu\'minoon', 'type'=>'Meccan', 'english_title'=>'The Believers'],
        ['name'=>'An-Nur', 'type'=>'Medinan', 'english_title'=>'The Light'],
        ['name'=>'Al-Furqan', 'type'=>'Meccan', 'english_title'=>'The Criterion, The Standard, The Standard of True and False'],
        ['name'=>'ash-Shu`ara', 'type'=>'Meccan', 'english_title'=>'The Poets'],
        ['name'=>'An-Naml', 'type'=>'Meccan', 'english_title'=>'The Ant, The Ants'],
        ['name'=>'Al-Qasas', 'type'=>'Meccan', 'english_title'=>'The Narrations, The Stories, The Story'],
        ['name'=>'Al-`Ankabut', 'type'=>'Meccan', 'english_title'=>'The Spider'],
        ['name'=>'Ar-Rum', 'type'=>'Meccan', 'english_title'=>'The Romans, The Byzantines'],
        ['name'=>'Luqman', 'type'=>'Meccan', 'english_title'=>'Luqman'],
        ['name'=>'As-Sajdah', 'type'=>'Meccan', 'english_title'=>'The Prostration, Worship, Adoration'],
        ['name'=>'Al-Ahzab', 'type'=>'Medinan', 'english_title'=>'The Clans, The Confederates, The Combined Forces'],
        ['name'=>'Saba', 'type'=>'Meccan', 'english_title'=>'Sheba'],
        ['name'=>'Fatir', 'type'=>'Meccan', 'english_title'=>'The Originator'],
        ['name'=>'Ya seen', 'type'=>'Meccan', 'english_title'=>'Ya Seen'],
        ['name'=>'As-Saffat', 'type'=>'Meccan', 'english_title'=>'Those Who Set The Ranks, Drawn Up In Ranks, Those Ranged in Ranks'],
        ['name'=>'Sad', 'type'=>'Meccan', 'english_title'=>'Sad'],
        ['name'=>'Az-Zumar', 'type'=>'Meccan', 'english_title'=>'The Crowds, The Troops, Throngs'],
        ['name'=>'Ghafir', 'type'=>'Meccan', 'english_title'=>'The Forgiver (God), Forgiving'],
        ['name'=>'Fussilat', 'type'=>'Meccan', 'english_title'=>'Expounded, Explained In Detail, Clearly Spelled Out'],
        ['name'=>'Ash-Shura', 'type'=>'Meccan', 'english_title'=>'The Consultation'],
        ['name'=>'Az-Zukhruf', 'type'=>'Meccan', 'english_title'=>'The Gold Adornments, The Ornaments of Gold, Luxury, Gold'],
        ['name'=>'Ad-Dukhan', 'type'=>'Meccan', 'english_title'=>'The Smoke'],
        ['name'=>'Al-Jathiyah', 'type'=>'Meccan', 'english_title'=>'The Kneeling Down, Crouching'],
        ['name'=>'Al-Ahqaf', 'type'=>'Meccan', 'english_title'=>'Winding Sand-tracts, The Dunes, The Sand-Dunes'],
        ['name'=>'Muhammad', 'type'=>'Medinan', 'english_title'=>'Muhammad Sallalahu \'Alaihi Wa Salam'],
        ['name'=>'Al-Fath', 'type'=>'Medinan', 'english_title'=>'The Victory, Conquest'],
        ['name'=>'Al-Hujurat', 'type'=>'Medinan', 'english_title'=>'The Private Apartments, The Inner Apartments'],
        ['name'=>'Qaf', 'type'=>'Meccan', 'english_title'=>'Qaf'],
        ['name'=>'Ad-Dhariyat', 'type'=>'Meccan', 'english_title'=>'The Wind That Scatter, The Winnowing Winds, The Dust-Scattering Winds'],
        ['name'=>'At-Tur', 'type'=>'Meccan', 'english_title'=>'The Mount, Mount Sinai'],
        ['name'=>'An-Najm', 'type'=>'Meccan', 'english_title'=>'The Star, The Unfolding'],
        ['name'=>'Al-Qamar', 'type'=>'Meccan', 'english_title'=>'The Moon'],
        ['name'=>'Ar-Rahman', 'type'=>'Medinan', 'english_title'=>'The Most Merciful, The Most Gracious'],
        ['name'=>'Al-Waqi\'ah', 'type'=>'Meccan', 'english_title'=>'The Inevitable, The Event, That Which Must Come to Pass'],
        ['name'=>'Al-Hadeed', 'type'=>'Medinan', 'english_title'=>'The Iron'],
        ['name'=>'Al-Mujadilah', 'type'=>'Medinan', 'english_title'=>'The Pleading, The Pleading Woman'],
        ['name'=>'Al-Hashr', 'type'=>'Medinan', 'english_title'=>'The Mustering, The Gathering, Exile, Banishment'],
        ['name'=>'Al-Mumtahanah', 'type'=>'Medinan', 'english_title'=>'The Examined One, She That Is To Be Examined'],
        ['name'=>'As-Saff', 'type'=>'Medinan', 'english_title'=>'The Ranks, Battle Array'],
        ['name'=>'Al-Jumu\'ah', 'type'=>'Medinan', 'english_title'=>'The Congregation, Friday'],
        ['name'=>'Al-Munafiqun', 'type'=>'Medinan', 'english_title'=>'The Hypocrites'],
        ['name'=>'At-Taghabun', 'type'=>'Medinan', 'english_title'=>'The Cheating, The Mutual Disillusion, The Mutual Loss and Gain, Loss and Gain'],
        ['name'=>'At-Talaq', 'type'=>'Medinan', 'english_title'=>'Divorce'],
        ['name'=>'At-Tahreem', 'type'=>'Medinan', 'english_title'=>'The Prohibition'],
        ['name'=>'Al-Mulk', 'type'=>'Meccan', 'english_title'=>'The Dominion, Sovereignty, Control'],
        ['name'=>'Al-Qalam', 'type'=>'Meccan', 'english_title'=>'The Pen'],
        ['name'=>'Al-Haqqah', 'type'=>'Meccan', 'english_title'=>'The Sure Reality, The Laying-Bare of the Truth'],
        ['name'=>'Al-Ma\'aarij', 'type'=>'Meccan', 'english_title'=>'The Ways of Ascent, The Ascending Stairways'],
        ['name'=>'Nuh', 'type'=>'Meccan', 'english_title'=>'Noah'],
        ['name'=>'Al-Jinn', 'type'=>'Meccan', 'english_title'=>'The Spirits, The Unseen Beings'],
        ['name'=>'Al-Muzzammil', 'type'=>'Meccan', 'english_title'=>'The Enfolded One, The Enshrouded One, Bundled Up, The Enwrapped One'],
        ['name'=>'Al-Muddathir', 'type'=>'Meccan', 'english_title'=>'The One Wrapped Up, The Cloaked One, The Man Wearing A Cloak, The Enfolded One'],
        ['name'=>'Al-Qiyamah', 'type'=>'Meccan', 'english_title'=>'Resurrection, The Day of Resurrection, Rising Of The Dead'],
        ['name'=>'Al-Insan', 'type'=>'Medinan', 'english_title'=>'The Human, Man'],
        ['name'=>'Al-Mursalat', 'type'=>'Meccan', 'english_title'=>'Those Sent Forth, The Emissaries, Winds Sent Forth'],
        ['name'=>'An-Naba', 'type'=>'Meccan', 'english_title'=>'The Great News, The Announcement, The Tiding'],
        ['name'=>'An-Nazi\'at', 'type'=>'Meccan', 'english_title'=>'Those Who Tear Out, Those Who Drag Forth, Soul-snatchers, Those That Rise'],
        ['name'=>'`Abasa', 'type'=>'Meccan', 'english_title'=>'He Frowned'],
        ['name'=>'At-Takweer', 'type'=>'Meccan', 'english_title'=>'The Folding Up, The Overthrowing, Shrouding in Darkness'],
        ['name'=>'Al-Infitar', 'type'=>'Meccan', 'english_title'=>'The Cleaving Asunder, Bursting Apart'],
        ['name'=>'Al-Mutaffifeen', 'type'=>'Meccan', 'english_title'=>'The Dealers in Fraud, Defrauding, The Cheats, Those Who Give Short Measure'],
        ['name'=>'Al-Inshiqaq', 'type'=>'Meccan', 'english_title'=>'The Rending Asunder, The Sundering, Splitting Open, The Splitting Asunder'],
        ['name'=>'Al-Burooj', 'type'=>'Meccan', 'english_title'=>'The Mansions Of The Stars, Constellations, The Great Constellations'],
        ['name'=>'At-Tariq', 'type'=>'Meccan', 'english_title'=>'The Night-Visitant, The Morning Star, The Nightcomer, That Which Comes in the Night'],
        ['name'=>'Al-A\'la', 'type'=>'Meccan', 'english_title'=>'The Most High, The All-Highest, Glory To Your Lord In The Highest'],
        ['name'=>'Al-Ghashiyah', 'type'=>'Meccan', 'english_title'=>'The Overwhelming Event, The Overshadowing Event, The Pall'],
        ['name'=>'Al-Fajr', 'type'=>'Meccan', 'english_title'=>'The Break of Day, The Daybreak, The Dawn'],
        ['name'=>'Al-Balad', 'type'=>'Meccan', 'english_title'=>'The City, The Land'],
        ['name'=>'Ash-Shams', 'type'=>'Meccan', 'english_title'=>'The Sun'],
        ['name'=>'Al-Lail', 'type'=>'Meccan', 'english_title'=>'The Night'],
        ['name'=>'Ad-Dhuha', 'type'=>'Meccan', 'english_title'=>'The Glorious Morning Light, The Forenoon, Morning Hours, Morning Bright, The Bright Morning Hours'],
        ['name'=>'Al-Inshirah', 'type'=>'Meccan', 'english_title'=>'The Expansion of Breast, Solace, Consolation, Relief, Patient, The Opening-Up of the Heart'],
        ['name'=>'Al-Teen', 'type'=>'Meccan', 'english_title'=>'The Fig Tree, The Fig'],
        ['name'=>'al-`Alaq', 'type'=>'Meccan', 'english_title'=>'The Clinging Clot, Clot of Blood, The Germ-Cell'],
        ['name'=>'Al-Qadr', 'type'=>'Meccan', 'english_title'=>'The Night of Honor, The Night of Decree, Power, Fate, Destiny'],
        ['name'=>'Al-Bayyinah', 'type'=>'Medinan', 'english_title'=>'The Clear Evidence, The Evidence of the Truth'],
        ['name'=>'Az-Zalzala', 'type'=>'Medinan', 'english_title'=>'The Earthquake'],
        ['name'=>'Al-Adiyat', 'type'=>'Meccan', 'english_title'=>'The Courser, The Chargers, The War Horse'],
        ['name'=>'al-Qari`ah', 'type'=>'Meccan', 'english_title'=>'The Striking Hour, The Great Calamity, The Stunning Blow, The Sudden Calamity'],
        ['name'=>'At-Takathur', 'type'=>'Meccan', 'english_title'=>'The Piling Up, Rivalry in World Increase, Competition, Greed for More and More'],
        ['name'=>'Al-Asr', 'type'=>'Meccan', 'english_title'=>'The Time, The Declining Day, The Epoch, The Flight of Time'],
        ['name'=>'Al-Humazah', 'type'=>'Meccan', 'english_title'=>'The Scandalmonger, The Traducer, The Gossipmonger, The Slanderer'],
        ['name'=>'Al-Feel', 'type'=>'Meccan', 'english_title'=>'The Elephant'],
        ['name'=>'Al-Quraish', 'type'=>'Meccan', 'english_title'=>'Quraysh'],
        ['name'=>'Al-Maa\'oun', 'type'=>'Meccan', 'english_title'=>'The Neighbourly Assistance, Small Kindnesses, Almsgiving, Assistance'],
        ['name'=>'Al-Kawthar', 'type'=>'Meccan', 'english_title'=>'Abundance, Plenty, Good in Abundance'],
        ['name'=>'Al-Kafiroun', 'type'=>'Meccan', 'english_title'=>'The Disbelievers, The Kafirs, Those Who Deny the Truth'],
        ['name'=>'An-Nasr', 'type'=>'Medinan', 'english_title'=>'The Help, Divine Support, Victory, Succour'],
        ['name'=>'Al-Masad', 'type'=>'Meccan', 'english_title'=>'The Plaited Rope, The Palm Fibre, The Twisted Strands'],
        ['name'=>'Al-Ikhlas', 'type'=>'Meccan', 'english_title'=>'Purity of Faith, The Fidelity, The Declaration of [God\'s] Perfection'],
        ['name'=>'Al-Falaq', 'type'=>'Meccan', 'english_title'=>'The Daybreak, Dawn, The Rising Dawn'],
        ['name'=>'Al-Nas', 'type'=>'Meccan', 'english_title'=>'Mankind, Men'],
    ];
}
