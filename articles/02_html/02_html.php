<div id='title'>
    <p><span style="color : #ff6363"> Présentation du projet </span>| 10 mai 2015</p>
    <h1>Quels outils utiliserons-nous ?</h1>
    <h2>De Loïc Brin</h2>
</div>
<div id='post'>


    <!-- ARTICLE-->

    <p>Je présente sur cette page tous les outils que j'ai explorés et qui nous permettrons de faire de beaux articles : interactifs, rigoureux et pédagogiques. Une petite phrase pour présenter les trois langages clés pour créer une page web. Il y a d'abord le HTML5 : c'est le fond (le blabla), le CSS3 : c'est la forme (couleurs, positions sur la page...) et le Javascript qui complète les deux autres.</p>
    <h2>Dans le cadre du HTML5</h2>



    <h3>Environnement em</h3>

    <p>Il permet de mettre en relief les termes importants d'un paragraphe (même logique que emph sur LaTeX). Voici le rendu : <em>important.</em></p>

    <h3>Blockquote</h3>

    <p>Je pense que son intitulé parle pour lui-même ! En voici un exemple :</p>
    <blockquote> "Une belle citation a le droit d'être joliment mise en valeur sur une page html"<br /><div class="author">Loïc Brin</div></blockquote>


    <h3>La classe lettrine</h3>

    <p><span class="lettrine">V</span>oici une lettrine. Je te présente ici la classe Lettrine. Cette classe permet de faire une <em>lettrine</em>, c'est-à-dire de grossir la première lettre d'un paragraphe. Il faut que le paragraphe soit suffisamment grand. C'est donc pour cela que je palabre autant, pour que tu voies un rendu qui vaille la peine ! J'espère que cette dernière phrase de blabla suffira à te convaincre que les lettrines peuvent être élégantes. Allez, j'arrête là !</p>

    <h3>La classe ref</h3>

    <p>Elle permet de renseigner les références de la page.</p>
    <div class="ref">

        (1). Loïc BRIN, <em>Un test pour écrire les références</em>, 2015, 
        <br>
        (2). Loïc BRIN, <em>Un deuxième test pour les références</em>, 2015


    </div>

    <h3>Les listes</h3>

    <p>
    <ul>
        <li> Une première itération,</li>
        <li> Une deuxième itération,</li>
        <li> Une troisième itération,</li>
    </ul>

    </p>

<h3>Les tableaux</h3>

<p>On peut facilement les générer avec <a href="tablegenerator.com">tablegenerator.com</a>, le même logiciel que celui que j'utilise pour faire rapidement des tableaux LaTeX.</p>
<table>
    <tr>
        <th>Trimestre</th>
        <th>16,55%</th>
    </tr>
    <tr>
        <td>Mois</td>
        <td>17,30%</td>
    </tr>
    <tr>
        <td>2 semaines</td>
        <td>19,04%</td>
    </tr>
    <tr>
        <td>1 semaine</td>
        <td>23,82%</td>
    </tr>
</table>
<h3>Environnement mycaption</h3>

C'est moi qui l'ai créé (comme beaucoup d'autres ci-dessus). Il sera à placer sous des images, des tableaux...

<div class="mycaption">Ce magnifique graphique a été réalisé en javascript.</div>
<h3>Des info-bulles</h3>
En voici une <a href="#" title="Website name">par exemple</a>!
<h2>Avec Javascript</h2>
<p>Javascript complète le HTML5 et le CSS3. Il permet de modifier une page sans avoir à la rafraîchir et plus largement de compléter le HTML5. Tu vas vite aimer ce langage, non pas pour sa structure, mais pour les possibilités qui s'offrent à nous grâce à lui !</p>
<h3>Du LaTeX sur ma page HTML Oui</h3>
<p>Je laisse parler le LaTeX ci-dessous (tu reconnaîtras - peut-être - un passage de mon petit rapport sur les grandes matrices aléatoires).</p>
<script type="text/x-mathjax-config">
            MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
</script>
<script type="text/javascript" src="js/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
Under $H_1-H_4$,
$$\Phi_N(\lambda,\tau) \xrightarrow[N\to+\infty]{}\Phi(\lambda,\tau) $$ 
at all points of continuity of $\Phi$, and,
$$\forall (\lambda,\tau) \in \mathbb R^2, \quad \Phi(\lambda, \tau)=\int_{-\infty}^{\lambda} \int_{-\infty}^{\tau}\phi(l,t)dH(t)dF(l)$$
with,
$$\forall (l,t) \in \mathbb{R}^2 \quad \phi(l,t)=\frac{\frac{1}{\gamma}lt}{(at-l)^2+b^2t^2} $$
if $l>0$ and $0$ otherwise,
with,
$$\begin{cases}a = Re(1-\frac{1}{\gamma}-\frac{1}{\gamma}l\breve{m}_F(l)) \\b=Im(1-\frac{1}{\gamma}-\frac{1}{\gamma}l\breve{m}_F(l)) \end{cases} $$           
<h3>La DataViz, c'est l'avenir !</h3>

<p>Énormément de sites se sont développés pour rendre accessible à tout petit aspirant codeur l'accès à la Data Vizualization, aka <em>DataViz</em>.</p>

<p>Te voici, ci-dessous, une liste non exhaustive des petits bijoux dont nous avons l'accès&#8239:</p>
<ul>
    <li><a href="amcharts.com">Amcharts</a> : pour faire des cartes et / ou des graphes interactifs,</li>
    <li>Package Google pour transcrire un graphe R en graphe Javascript interactif !</li>
</ul>
<p>Allez, pour le plaisir des yeux, un petit exemple ci-dessous :</p>	

<script type="text/javascript" src="js/ammap/ammap.js"></script>
<script type="text/javascript" src="js/ammap/maps/js/worldLow.js"></script>
<script type="text/javascript" src="js/ammap/themes/dark.js"></script>

<div id="chartdiv2">
    <script type="text/javascript" src="articles/02_html/europe.js"></script>  
</div>	
<div class="mycaption">Ce magnifique graphique a été réalisé en javascript.</div>

<p>Et ce n'est pas grand-chose ! Il est assez simple de reproduire un pricer comme celui que nous avions rendu pour le projet de C++ (j'entends un graphe encore plus interactif : sliders, choix de valeurs, radiobuttons...)</p>
<h2>Concrètement, comme cela fonctionne ?</h2>
<h3>Code et compilation</h3>
<p>C'est tout bête. On tape le code dans un éditeur de texte et les explorateurs internet (Chrome, IE, Firefox...) compilent !</p>
<p>Bien sûr, comme pour le C++, il existe des logiciels qui rendent la tâche plus aisée. J'utilise (et te recommande) <a href="">Brackets</a> pour les pages web. Autocomplétion et coloration syntaxique sont au rendez-vous. On s'y fait très vite.</p>
<h3>De la lecture ?</h3>

<p>Tu sais combien je suis cool. Te voici donc de la lecture si tu veux creuser. Ces versions sont surlignées (par mes soins), tu trouveras des versions vierges assez facilement sur internet si tu préfères :</p>
<ul>
    <li>HTML5 et CCS3 : il peut être pratique que tu le lises mais sache que si le coeur ne t'en dit pas, je veux bien transcrire en HTML tes articles écrits en word !</li>
    <li>JavaScript : vraiment vraiment pas une priorité.</li>
</ul>

<h4> Par Loïc Brin </h4>
<h5> ♦ </h5>
