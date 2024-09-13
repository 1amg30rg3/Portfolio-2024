<script setup>
    import HeaderC from '@/components/HeaderC.vue'
    import HomeC from '@/components/HomeC.vue'
    import ExpertisedIn_Design from '@/components/ExpertisedIn_Design.vue'
    import ExpertisedIn_Front from '@/components/ExpertisedIn_Front.vue'
    import ExpertisedIn_Back from '@/components/ExpertisedIn_Back.vue'
    import WorkC from '@/components/WorkC.vue'
    import ContactC from '@/components/ContactC.vue'
    import MessageUsC from '@/components/MessageUsC.vue'
    import AboutApp from '@/components/AboutApp.vue'
</script>

<template>
  <div class="perspective effect-rotate-left">
    <div class="container"><div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">

          <HeaderC></HeaderC>

          <ul class="l-main-content main-content">

            <HomeC></HomeC>
            <ExpertisedIn_Design></ExpertisedIn_Design>
            <ExpertisedIn_Front></ExpertisedIn_Front>
            <ExpertisedIn_Back></ExpertisedIn_Back>
            <WorkC></WorkC>
            <ContactC></ContactC>
            <MessageUsC></MessageUsC>
            <AboutApp></AboutApp>

          </ul>
        </div>
      </div>
    </div>
    <div id="__animate">
    </div>
    <ul class="outer-nav outer-nav320">
      <li class="is-active">Home</li>
      <li>Designer</li>
      <li>Frontend</li>
      <li>Backend</li>
      <li>Works</li>
      <li>Contact</li>
      <li>Message</li>
      <li>About App</li>
    </ul>
  </div>
</template>
