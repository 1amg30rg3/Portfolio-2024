<template>
    <li class="l-section section">
      <div class="work">
        <h2>Selected work</h2>
        <div class="w__grid">
          <div class="w__card" v-for="work in works" :key="work.name" :class="{ 'fade-in': work.visible }">
            <a :href="work.link" target="_blank" rel="noopener noreferrer">
                <div class="w__image">
                    <img :src="work.picture" alt="">
                </div>
                <div class="w__content">
                    <h1>{{ work.name }}</h1>
                    <p>{{ work.description }}</p>
                </div>
            </a>
          </div>
        </div>
        <div class="sliderArrows">
            <button class="arrow-left" @click="sliderChange('left')">
                <img src="@/assets/img/arrow.svg" alt="">
            </button>
            <button class="sliderST" @click="sliderStartStop()">{{ sliderStatus ? 'Stop Slider' : 'Start Slider' }}</button>
            <button class="arrow-right" @click="sliderChange('right')">
                <img src="@/assets/img/arrow.svg" alt="">
            </button>
        </div>
      </div>
    </li>
  </template>


  <style>

.fade-in {
  opacity: 0;
  transition: opacity 1s;
}

.fade-in.fade-in-active {
  opacity: 1;
}



</style>
  <script>

  export default {
    data() {
      return {
        work: [
            {
                name: 'cmg',
                picture: 'http://api.ggavasheli.com/img/cmp.webp',
                link: 'https://comparemygarage.com/',
                description: 'Compare My Garage helps you find reliable vehicle specialists transparently and quickly, eliminating the frustration of incompetent or overpriced services.'
            },
            // {
            //     name: 'websavvys',
            //     picture: 'http://api.ggavasheli.com/img/websavvys.webp',
            //     link: 'https://websavvys.com/',
            //     description: 'Websavvys is a leading web development company specializing in creating high-quality and impactful websites. With a team of experienced developers and designers, Websavvys takes pride in delivering exceptional web solutions tailored to meet the unique needs and goals of each client.'
            // },
            // {
            //     name: 'mamimood',
            //     picture: 'http://api.ggavasheli.com/img/mamimood.webp',
            //     link: 'https://mamimood.de/',
            //     description: 'Three mothers started the endeavor, bringing diverse skills in coaching, education, youth work, and marketing. Committed to creating a supportive community for women.'
            // },
            // {
            //     name: 'cloudcomet',
            //     picture: 'http://api.ggavasheli.com/img/cloudcomet.webp',
            //     link: 'https://cloudcomet.tech/',
            //     description: 'CloudComet provides trusted IT services to SMEs in Harehills, including technical helpdesk support and computer support, for efficient and effective solutions.'
            // },
            // {
            //     name: 'logicline',
            //     picture: 'http://api.ggavasheli.com/img/logicline.webp',
            //     link: 'https://logicline.online/',
            //     description: 'LogicLine manages your IT services, support, maintenance, and monitoring for optimal business focus and tech functionality.'
            // },
            // {
            //     name: 'pg',
            //     picture: 'http://api.ggavasheli.com/img/pg.webp',
            //     link: 'https://pg.ggavasheli.com/',
            //     description: 'Generate strong passwords effortlessly with our secure password generator. Enhance online security with unique, random, and resilient passwords.'
            // },
            // {
            //     name: 'uf',
            //     picture: 'http://api.ggavasheli.com/img/uf.webp',
            //     link: 'https://uf.ggavasheli.com/',
            //     description: 'A reliable file upload server that simplifies the process of securely transferring and storing your files. Effortlessly upload, manage, and share files with advanced security features and efficient performance. '
            // },
            // {
            //     name: 'icurawb',
            //     picture: 'http://api.ggavasheli.com/img/icurawb.webp',
            //     link: 'https://icura.ggavasheli.com/',
            //     description: 'RbTalent Shop offers versatile gift debit cards that never expire, in various designs, for easy and hassle-free gift-giving.'
            // }
        ],
        works: [],
        sliderStatus: true,
        itemCount: 3,
        itemID: 0,
      };
    },
    mounted() {
        if ( window.innerWidth <= 600 ){
            this.itemCount = 2
        }else{
            this.itemCount = 3
        }



          this.mySlider(this.itemCount)
          setInterval(() => {
              if(this.sliderStatus) this.mySlider(this.itemCount)
          }, 5000)





    },
    methods: {
      sliderChange(direction){
        if (direction === 'right') {
          this.mySlider(this.itemCount);
        } else {
          this.itemID = (this.itemID - 2 * this.itemCount + this.work.length) % this.work.length;
          this.mySlider(this.itemCount);
        }
      },

      mySlider(elementSize) {
            if ( window.innerWidth <= 600 ){
                this.itemCount = 2
            }else{
                this.itemCount = 3
            }

            this.works = []


            while ( elementSize != 0 ){
                const workItem = this.work.slice(this.itemID, this.itemID + 1)[0];
                this.works.push({...workItem,visible: true});
                this.itemID += 1

                if ( this.itemID == this.work.length){
                    this.itemID = 0
                }

                elementSize--
            }

            this.works.forEach((element, index) => {
              setTimeout(() => {
                console.log(element.visible);
                element.visible = false;
              }, 100 * index);
            });

      },


      sliderStartStop(){
        this.sliderStatus ? this.sliderStatus = false : this.sliderStatus = true
      }
    }
  };
  </script>
