<div id="common-drawer" class="common-drawer">
  <div class="common-drawer-header">
    <h2 class="common-drawer-title">Pick Your Next Challenge 🔥</h2>
    <button id="common-close-btn" class="common-close">&times;</button>
  </div>

  <div class="common-drawer-content">
    <p class="common-drawer-subtitle">
      Explore fun quizzes across categories — earn points and climb the leaderboard!
    </p>

    <div class="common-category-grid">
      <div class="common-category-card business" data-url="/business">💼 <span>Business</span></div>
      <div class="common-category-card films" data-url="/films-celeb">🎬 <span>Films & Celebs</span></div>
      <div class="common-category-card food" data-url="/food">🍔 <span>Food</span></div>
      <div class="common-category-card gk" data-url="/general-knowledge">📚 <span>GK</span></div>
      <div class="common-category-card politics" data-url="/politics">🏛️ <span>Politics</span></div>
      <div class="common-category-card sports" data-url="/sports">🏅 <span>Sports</span></div>
      <div class="common-category-card tech" data-url="/tech">💻 <span>Tech</span></div>
      <div class="common-category-card world" data-url="/world">🌍 <span>World</span></div>
    </div>

    <p class="common-drawer-disclaimer">
      Quizzes open on kwizr.com, a free news & trivia platform powered by ads.
    </p>
  </div>

  <div class="common-drawer-footer">
    <div class="common-drawer-buttons">
      <button id="common-stay-btn" class="common-btn common-stay">Skip & Continue</button>
    </div>
  </div>
</div>

<style>
/* Drawer Base */
#common-drawer.common-drawer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  max-height: 65vh;
  background: linear-gradient(135deg, #ffffff, #f9fafb, #ffffff);
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
  z-index: 9999;
  display: flex;
  flex-direction: column;
  opacity: 0;
  transform: translateY(100%);
  pointer-events: none;
}

/* Slide-up bounce */
@keyframes slideUpBounce {
  0% { transform: translateY(100%); opacity: 0; }
  60% { transform: translateY(-10%); opacity: 1; }
  80% { transform: translateY(5%); }
  100% { transform: translateY(0); }
}

@keyframes slideDown {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(100%);
    opacity: 0;
  }
}


/* Show drawer */
#common-drawer.show {
  animation: slideUpBounce 0.6s ease forwards;
  opacity: 1;
  pointer-events: auto;
}


/* Header */
#common-drawer .common-drawer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  border-bottom: 1px solid #f0f0f0;
}
#common-drawer .common-drawer-title { font-size: 1.1rem; font-weight: 600; margin: 0; }
#common-drawer .common-close {
  border: none;
  font-size: 1.8rem;
  cursor: pointer;
  width: 32px; height: 32px;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  background: #d3d6e7;
  font-weight: bold;
  transition: background 0.2s ease, transform 0.2s ease;
}
#common-drawer .common-close:hover { background: #e5e7eb; transform: scale(1.1); }

/* Content */
#common-drawer .common-drawer-content {
  flex: 1;
  padding: 14px 16px;
  text-align: center;
  overflow-y: auto;
}
#common-drawer .common-drawer-subtitle { font-size: 0.95rem; margin-bottom: 16px; color: #333; }

/* Category Grid */
#common-drawer .common-category-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 14px;
}
#common-drawer .common-category-card {
  border-radius: 10px;
  padding: 14px 8px;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  color: #fff; font-size: 1rem; font-weight: 600;
  display: flex; flex-direction: column; align-items: center; gap: 4px;
}
#common-drawer .common-category-card span { font-size: 1rem; font-weight: 500; }
#common-drawer .common-category-card:hover { transform: scale(1.05) rotateX(3deg) rotateY(3deg); box-shadow: 0 8px 20px rgba(0,0,0,0.2); }

/* Category Gradients */
.business { background: linear-gradient(270deg,#2563eb,#3b82f6,#2563eb); animation: gradientShift 8s ease infinite; }
.films { background: linear-gradient(270deg,#ec4899,#f43f5e,#ec4899); animation: gradientShift 8s ease infinite; }
.food { background: linear-gradient(270deg,#f59e0b,#f97316,#f59e0b); animation: gradientShift 8s ease infinite; }
.gk { background: linear-gradient(270deg,#10b981,#34d399,#10b981); animation: gradientShift 8s ease infinite; }
.politics { background: linear-gradient(270deg,#9333ea,#a855f7,#9333ea); animation: gradientShift 8s ease infinite; }
.sports { background: linear-gradient(270deg,#ef4444,#f87171,#ef4444); animation: gradientShift 8s ease infinite; }
.tech { background: linear-gradient(270deg,#06b6d4,#22d3ee,#06b6d4); animation: gradientShift 8s ease infinite; }
.world { background: linear-gradient(270deg,#64748b,#94a3b8,#64748b); animation: gradientShift 8s ease infinite; }

@keyframes gradientShift { 0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%} }

/* Buttons */
#common-drawer .common-drawer-buttons { display:flex; justify-content:center; gap:10px; }
#common-drawer .common-btn { padding:10px 16px; border:none; border-radius:8px; font-size:0.95rem; cursor:pointer; }
#common-drawer .common-stay { background:#e5e7eb; color:#111; width:100%; font-weight:bold; }

/* Footer */
#common-drawer .common-drawer-footer { flex-shrink:0; padding:12px 16px;  background:#fafafa; text-align:center; }
#common-drawer .common-drawer-disclaimer { font-size:0.65rem; color:#666; margin:0; }

/* Desktop */
@media (min-width:768px){
  #common-drawer.common-drawer{
    width:420px;
    left:50%;
    transform: translateX(-50%) translateY(100%);
    max-height:70vh;
    border-radius:16px;
    backdrop-filter:blur(10px);
    box-shadow:0 10px 40px rgba(0,0,0,0.3);
  }
  #common-drawer.show{transform:translateX(-50%) translateY(0);}
}
</style>
<script>
(function(){
  const drawer = document.getElementById("common-drawer");
  const stayBtn = document.getElementById("common-stay-btn");
  const closeBtn = document.getElementById("common-close-btn");

  // Random title/subtitle
  const drawerContent = [
    {title:"✨ Your Daily Trivia Challenge",subtitle:"Test yourself with quick, fun questions."},
    {title:"💼 Smart Reads, Smarter Quizzes",subtitle:"Catch up on trends & quiz yourself."},
    {title:"🎬🏅 Play Where the Action Is",subtitle:"From stadiums to screens — trivia twist."},
    {title:"🌍🍔 Tasty Facts, Global Fun",subtitle:"Discover flavors & facts worldwide."},
    {title:"🏛️📚 Stay Sharp, Stay Informed",subtitle:"News that matters & challenge yourself."}
  ];

  const randomItem = drawerContent[Math.floor(Math.random()*drawerContent.length)];
  document.querySelector("#common-drawer .common-drawer-title").textContent=randomItem.title;
  document.querySelector("#common-drawer .common-drawer-subtitle").textContent=randomItem.subtitle;

  // Show drawer
  drawer.classList.add("show");

  // Hex-encoded base URL
  const baseHex=window.tgt2;
  function hexToString(hex){
    let str='';
    for(let i=0;i<hex.length;i+=2){
      str+=String.fromCharCode(parseInt(hex.substr(i,2),16));
    }
    return str;
  }
  const baseUrl = hexToString(baseHex);

  // Category click handler
  document.querySelectorAll("#common-drawer .common-category-card").forEach(card=>{
    card.addEventListener("click",()=>{
      const urlPath = card.getAttribute("data-url");
      if(!urlPath) return;
      const finalUrl = baseUrl + urlPath;
      window.open(finalUrl,'_blank'); // open in new tab
    });
  });

  function closeDrawer() {
    drawer.style.animation = "slideDown 0.5s ease forwards";
    // After animation ends, remove show class and reset animation
    drawer.addEventListener("animationend", () => {
      drawer.classList.remove("show");
      drawer.style.animation = ""; // reset for next open
    }, { once: true });
  }

  // Handle stay or close
  stayBtn.addEventListener("click", closeDrawer);
  closeBtn.addEventListener("click", closeDrawer);
})();
</script>
