<template>
  <div id="app">
    <div class="un row d-flex container-fluid justify-content-center p-0 m-0">
      <div>
        <img
          src="../assets/img/chapitre1/camping-dandelion-site.gif"
          alt="imgfin"
          style="margin-bottom: 2vh"
        >
      </div>
      <div style="width: 100%">
        <img src="../assets/img/chapitre1/case1.png" alt="imgvav" style="margin-bottom: 2vh">
      </div>
      <div class="col-5 d-flex justify-content-start pl-0 pr-0">
        <div style="width: 100%" id="test">
          <img src="../assets/img/chapitre1/case3.png" alt="imgvav" class="mb-0">
        </div>
      </div>
      <div class="col-7 pr-0">
        <img src="../assets/img/chapitre1/comm-part-1.png" alt="post" class="mb-0">
        <div class="scroll">
          <div style="position: absolute">
            <img src="../assets/img/chapitre1/comm-part-2.png" alt="imgcom">
            <img src="../assets/img/chapitre1/comm-part-3.png" alt="imgcom">
            <img src="../assets/img/chapitre1/comm-part-4.png" alt="imgcom" v-if="com1">
            <img src="../assets/img/chapitre1/comm-part-5.png" alt="imgcom" v-if="com2">
            <img src="../assets/img/chapitre1/comm-part-6.png" alt="imgcom" v-if="com3">
            <img src="../assets/img/chapitre1/comm-part-7.png" alt="imgcom" v-if="com4">
            <img
              src="../assets/img/chapitre1/un-ami-est-en-train-d'écrire.gif"
              alt="imgcom"
              v-if="loading"
            >
          </div>
        </div>
      </div>

      <div class="mt-3">
        <img src="../assets/img/chapitre1/p2-case-1.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p3.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p4-case-1-2.png" alt="imgfin" class="mt-5">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p4-case-3.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p4-case-4.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p5.png" alt="imgfin">
      </div>
      <div class="test">
        <img src="../assets/img/chapitre1/p6-case1.png" alt="imgfin">
      </div>
      <div class="mamyContainer">
        <div style="position:relative; height: 100vh">
          <img src="../assets/img/chapitre1/bus fond anim.png" alt="fond">
          <img src="../assets/img/chapitre1/bus mémé.png" alt="mémé">
          <img src="../assets/img/chapitre1/bus porte gauche.png" alt="porte1" class="porte1">
          <img src="../assets/img/chapitre1/bus porte droite.png" alt="porte2" class="porte2">
        </div>
      </div>
      <div>
        <img src="../assets/img/chapitre1/p7-et-p8.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p9-p10-new-tshirt.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p11-case1.png" alt="imgptit">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p11.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p12-case-2.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p12 case3.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p13-case1.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p13-case2.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p13-case3.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p14-case4.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p15 case2.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p16 case 1.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre1/p18 case2.png" alt="imgfin">
      </div>
      <div style="margin-top:15%">
        <img src="../assets/img/chapitre1/p20 case1.png" alt="imgfin">
      </div>
      <div style="position:relative">
        <img src="../assets/img/chapitre1/p21-et-22.png" alt="imgfin" class="case">
        <!-- <div class="pin2" style="position:absolute;bottom:8%;left:0;z-index:3;height:100vh">
          <div class="position-relative" style="height:100vh">
            <img
              class="buisson"
              src="../assets/img/chapitre1/buisson.png"
              style="max-height:50%;margin-top:auto;position:absolute;bottom:0"
            >
          </div> 
        </div>-->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$nextTick(this.pinContainerScene);
    /*this.$nextTick(this.secondScene);*/
  },
  name: "app",
  data() {
    return {
      com1: false,
      com2: false,
      com3: false,
      com4: false,
      com5: false,
      loading: true,
      bla: true,
      mamys: [
        {
          title: "a"
        },
        {
          title: "b"
        },
        {
          title: "c"
        }
      ]
    };
  },
  methods: {
    pinContainerScene() {
      const Length = this.mamys.length;
      const tl = new this.$gsap.TimelineMax();
      var that = this;

      tl.add([
        TweenMax.fromTo(
          `img.porte1`,
          1.5,
          { x: "-50%" },
          {
            x: "30%",
            y: "0%"
          }
        ),
        TweenMax.fromTo(
          `img.porte2`,
          1.5,
          { x: "50%" },
          {
            x: "-30%",
            y: "0%"
          }
        )
      ]);

      const scene = new this.$scrollmagic.Scene({
        triggerElement: ".mamyContainer",
        triggerHook: 0,
        duration: `${Length * 80}%`
      })
        .setPin(".mamyContainer")
        .setTween(tl);
      this.$ksvuescr.$emit("addScene", "pinContainerScene", scene);
    },
    destroyed() {
      this.$ksvuescr.$emit("destroy");
    },
    comment: function() {
      var that = this;
      setTimeout(function() {
        that.com1 = true;
        setTimeout(function() {
          that.com2 = true;
          setTimeout(function() {
            that.com3 = true;
            setTimeout(function() {
              that.com4 = true;
              that.loading = false;
            }, 6000);
          }, 6000);
        }, 6000);
      }, 12000);
    }
  },
  created: function() {
    this.comment();
  }
};
</script>



<style lang="scss">
</style>
