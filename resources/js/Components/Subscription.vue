<script>


import store from '@/store';


export default {
    name:'Plan',
    data()
    {
        return{
            plan:'Plan'
        }
    },

    methods:
    {
        purchasePlan(plan)
        {

            console.log('Plan Click')
            store.commit('planSelection',plan)
            this.$router.push('Payment')
        }

    }




}



</script>

<template>

<section>
      <center>
      <h1 style="font-size: 2.5em;font-family: 'Open Sans', sans-serif; ">Maintenance Websites Price List</h1></center>
        <div class="pricing pricing-palden">
            <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-0" style="min-height: 497px;">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">$TWD</span>500
                        <span class="pricing-period">/ day</span>
                    </div>
                    <h3 class="pricing-title">Basic</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">1 Pages/Screens</li>
                    <li class="pricing-feature">Responsive Design</li>
                    <li class="pricing-feature">Content Upload</li>
                </ul>
                <button @click="purchasePlan('A')" class="pricing-action">Purchase This Plan</button>
            </div>
            <div class="pricing-item features-item ja-animate pricing__item--featured" data-animation="move-from-bottom" data-delay="item-1" style="min-height: 497px;">
                <div class="pricing-deco" style="background: linear-gradient(135deg,#a93bfe,#584efd)">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">$TWD</span>2499
                        <span class="pricing-period">/ month</span>
                    </div>
                    <h3 class="pricing-title">Premium</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">10 Pages/Screens</li>
                    <li class="pricing-feature">Responsive Design</li>
                    <li class="pricing-feature">Content Upload</li>
                </ul>
                <button @click="purchasePlan('B')" class="pricing-action">Purchase This Plan</button>
            </div>
            <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-2" style="min-height: 497px;">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">$TWD</span>999
                        <span class="pricing-period">/ week</span>
                    </div>
                    <h3 class="pricing-title">Standard</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">5 Pages/Screens</li>
                    <li class="pricing-feature">Responsive Design</li>
                    <li class="pricing-feature">Content Upload</li>
                </ul>
                <button @click="purchasePlan('C')" class="pricing-action">Purchase This Plan</button>
            </div>
        </div>
    </section>

</template>

<style scoped>


</style>
