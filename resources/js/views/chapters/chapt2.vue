<template>
  <div id="app">
    <div class="un row d-flex container-fluid justify-content-center p-0 m-0">
      <div>
        <img src="../assets/img/chapitre2/2page1.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page2.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page3.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page4.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page5.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page5fondu.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page6.png" alt="imgfin">
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page7.png" alt="imgfin">
      </div>
      <div class="anim">
        <div style="height:100vh;width:98vw">
          <div class="position-relative rodecont">
            <img
              style="visibility:hidden"
              src="../assets/img/chapitre2/2rodeurfond.png"
              alt="imgfin"
            >
            <img
              class="position-absolute rodefond"
              src="../assets/img/chapitre2/2rodeurfond.png"
              alt="imgfin"
            >
            <img
              class="position-absolute rodeplan"
              src="../assets/img/chapitre2/2rodeurplan.png"
              alt="imgfin"
            >
            <img class="position-absolute rode" src="../assets/img/chapitre2/2rodeur.png">
          </div>
        </div>
      </div>
      <div>
        <img src="../assets/img/chapitre2/2page8.png" alt="imgfin">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$nextTick(this.pinContainerScene);
  },
  name: "app",
  data() {
    return {};
  },
  methods: {
    pinContainerScene() {
      const Length = 1;
      const tl = new this.$gsap.TimelineMax();
      var that = this;

      tl.add([
        TweenMax.fromTo(
          `img.rode`,
          0.7,
          { x: "0%", y: "0%" },
          {
            x: "-70%",
            y: "45%"
          }
        )
      ]);

      const scene = new this.$scrollmagic.Scene({
        triggerElement: ".anim",
        triggerHook: 0,
        duration: `${Length * 100}%`
      })
        .setPin(".anim")
        .setTween(tl);
      this.$ksvuescr.$emit("addScene", "pinContainerScene", scene);
    },
    destroyed() {
      this.$ksvuescr.$emit("destroy");
    }
  }
};
</script>



<style lang="scss">
</style>
