<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hommage aux Personnes Disparues</title>
    <style>
        html {
            background: linear-gradient(to bottom, #fff, #6D6D6D) fixed;
        }
        body {
            font-family: Arial, sans-serif;
        }

        #tribute-content {
            text-align: center;
        }

        /* #tribute-image {
            max-width: 50%;
            height: auto;
        } */

        #tribute-text {
            margin: 20px 0;
        }

        #tribute-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        #tribute-button-left {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .body-text {
            text-align: left;
            text-align-last: left;
            display: flex;
            height: 100%;
            /* img {
                text-align: center; /* Centre horizontalement */
                /* display: flex; */
                /* justify-content: center; Centre horizontalement avec Flexbox */
                /* align-items: center; Centre verticalement avec Flexbox */
            /* } */ */
        }
        .container {
            display: flex;
            height: 100%;
        }
        .text {
            flex: 2;
            padding: 20px;
            align-items: center;
        }
        .images {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img {
            border: 2px solid #fff; /* Bordure blanche de 2 pixels */
            border-radius: 10px; /* Coins arrondis de 10 pixels */
        }
        .audio-player {
            position: fixed; /* Position fixe */
            top: 10px; /* 10 pixels à partir du haut */
            right: 10px; /* 10 pixels à partir de la droite */
            z-index: 999; /* Pour placer le lecteur audio au-dessus du reste du contenu */
        }
        h2 {
            font-size: 2em; /* Augmente la taille de la police de deux fois la taille par défaut */
        }
        .text {
            font-size: 1rem; /* Augmente la taille de la police de deux fois la taille par défaut */
        }
        .tribute-button{
            border: 2px solid #fff !important; /* Bordure blanche de 2 pixels */
            border-radius: 10px !important; /* Coins arrondis de 10 pixels */
        }
        body{
            margin-bottom: 60px;
        }

        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .text {
                text-align: center;
            }
            img {
                width: 80% !important;
            }
            .audio-player {
                display: none;
            }
            .image-container {
                flex-direction: column;
            }
            .image2{
                margin-top: 10px;
            }
            #id {
                width: 50% !important;
            }
        }
    </style>
</head>
<body>
    <div id="tribute-container">
        <div id="tribute-content">
            <h1>Ne les oublions pas</h2>
            <img src="/public/media/faniontr.gif" style="width: 20% !important;border:unset !important" id="fanion">
            <h3>Une pensée pour nos amis disparus</h3>
            <h3>Souvenons-nous des bons moments passés ensemble, de leurs actions, de leurs qualités et de leurs défauts</h3>
            <h3>Mais ne les oublions pas</h3>
        </div>
    </div>
    
    <div class="audio-player">
        <audio controls autoplay loop id="audio">
            <source src="/public/media/song/song-1.m4a" type="audio/mpeg">
            Votre navigateur ne supporte pas l'élément audio.
        </audio>
    </div>

    <button id="tribute-button" class="tribute-button">Suivant</button>
    <button id="tribute-button-left" class="tribute-button">Précédent</button>

    <script>
        const text0 = `
        <div id="tribute-content">
            <h2>Yves-Noel DERENNE</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-100.png" style="width: 30%;" class="presentation-image">
            <h3>✝️ 1943 - 26/02/2025</h3>
            <h3>Entrée au club le 01/09/1986</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <p>Yves-Noël Derenne, diplômé de droit privé et de sociologie, est admis au barreau de Paris en 1968. De 1974 à 1987, il prend la direction des ressources humaines chez Dow Chemical et de 1987 à 1991, il occupe la même fonction chez Amdahl Europe.
                            <br>
                            Puis, en 1991, il occupe le poste de directeur des ressources humaines chez Euro Tunnel.
                            </p>
                            <h3>Témoignages des amis</h3>
                            <p>
                                Yves-Noël, j’apprends avec stupeur ta disparition.
                                Difficile à accepter. Tu étais pour moi plus qu’un ami, un frère. Un jeune homme vraiment à part : ta simplicité, ton sourire précieux, plein d’indulgence, ton intelligence t’ayant conduit à de hauts postes, ne te permettant pas d’être souvent avec nous.
                                <br>
                                Et pourtant tu as su répondre à ma demande d’organiser un voyage à Londres, où tu résidais et travaillais, pour nos amis et leurs compagnes. Mémorable.
                                À cause de mon retour à Paris, nous nous sommes perdus de vue, à mon grand regret. Comment exprimer le fait que tu laisses un vide et restes néanmoins toujours présent dans mon cœur,avec toute mon amitié.
                                <br>
                                <strong>Jean-Claude Bourjalliat</strong>
                                <br>
                                <br>
                                Yves-Noël, alors domicilié à Londres et travaillant chez EUROTUNNEL, avait préparé le voyage du Président, initié par JC BOURJALLIAT, Président 88-89. Son épouse nous avait accompagnés tout au long du séjour.
                                <br>
                                Lors de plusieurs rencontres ultérieures à Paris, Yves-Noël avait exprimé son désir de rester membre de NICE-DOYEN en reconnaissance de nos actions, auxquelles il regrettait de ne pas pouvoir participer.
                                <br>
                                C’était un ami cher, bien qu’éloigné.
                                <br>
                                <strong>Michel Griselin</strong>
                                <br>
                                <br>
                                Yves-Noël est parti sans que nous le sachions. Inconnu pour la plupart d’entre nous. Il était, néanmoins, membre du club depuis 1986.                                                                                                                            
                                <br>
                                Il habitait Paris où je l’ai rencontré plusieurs fois pour déjeuner. Je garde le souvenir d’un homme sympathique et affable qui aimait parler de son métier et de son expérience.
                                <br>
                                Il me demandait des nouvelles du club et des anciens et regrettait son éloignement.
                                <br>
                                <strong>Ange Defendini</strong>
                                <br>
                                <br>
                                PS : Malgré de nombreuses tentatives je ne suis pas arrivé à joindre son épouse ni ses enfants pour leurs présenter nos condoléances.
                                <br>
                                Un bouquet de fleurs sera déposé au nom du Club, sur sa tombe au Cimetière du Père Lachaise, le 2 novembre.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        const text1 = `
        <div id="tribute-content">
            <h2>Josiane THOMAS</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-12.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 05/10/2024</h3>
            <h3>Entrée au club le 1/11/2018</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                        <p>Le temps nous a manqué pour pouvoir recueillir des témoignages sur notre amie.
                        <br>Cela sera fait plus tard….
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        const text2 = `
        <div id="tribute-content">
            <h2>Bénédicte LEMENICIER</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-13.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 15/09/2024</h3>
            <h3>Epouse de notre ami Jean</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <p>
                            Bénédicte
                                Aujourd’hui ta famille et tes amis sont là autour de toi pour te dire combien nous t’aimons.<br>
                                Bénédicte notre amie, mon amie qui nous laissent plein de doux souvenirs ;<br>
                                Chacun de nous retiendra plusieurs traits de ton caractère mais je pense que nous sommes tous d’accord sur certains.<br>
                                Ton courage : voici plusieurs années que tu luttais contre cette fichue maladie avec un courage exemplaire.<br>
                                A chaque fois que nous te rencontrions tu nous disais avec un sourire : « bon c’est difficile mais je vais y arriver ». Le faisais tu aussi pour nous rassurer ?
                                Car ta générosité était remarquable.<br>
                                Générosité qui se traduisait lors de tes invitations par une multitude de petites attentions, par des petits mots que tu adressais à chacun, par des repas où tu mettais tout ton savoir faire de parfaite hôte.<br>
                                Générosité qui lors des foires à livres te poussait à vendre des encyclopédies pesant des kilos à des personnes qui ne les liraient jamais mais toi tu pensais aux enfants qui allaient partir en vacances grâce à l’argent récolté.<br>                                
                                Générosité qui te faisait te lever à 5h du matin pour accompagner tel ou tel ami à l’aéroport<br>
                                Et combien d’autres exemples je pourrais citer<br>
                                Ton souci d’élégance : élégance liée à ton intelligence et à ta culture qui te permettait d’avoir un discours ciselé et une précision dans les mots choisis. Elégance vestimentaire discrète mais qui même dans les moments difficiles te poussait à avoir un léger maquillage et des tenues assorties.<br>
                                Tu le faisais pour toi mais aussi pour faire plaisir à Jean qui y était fort sensible
                                Ton affection pour les tiens. Tu partais à Paris rejoindre enfants et petits enfants en étant radieuse. Tes yeux s’illuminaient quand tu parlais de tes petits bouts de choux et que tu nous racontais les jeux et histoires que tu partageais avec eux même au téléphone<br>
                                Ton amour pour Jean. Ce dernier qui t’appelait affectueusement mon cœur était au centre de tes préoccupations. Combien de fois nous avons entendu : Ah je vais acheter cela pour Jean, Ah je suis allée avec Jean dans tel restaurant, Ah c’est l’anniversaire de Jean je vais organiser un petit repas, etc.<br>
                                Ta joie lorsque vous êtes rentrés de Marrakech, destination qui te faisait rêver et où tu as étonné Jean par un vol en montgolfière, une nuit dans le désert … <br>
                                Nous ne pouvons oublier Patapon ; ta compagne des promenades journalières et que tu choyais comme un enfant. Elle te le rendait bien en te regardant fixement assise à côté de toi.<br>
                                Enfin, tu étais profondément attachée au bassin d’Arcachon. Tu l’évoquais avec nostalgie, avec émotion et quand tu y retournais avec Jean ton visage s’éclairait et ton sourire traduisait vraiment ton plaisir.<br>
                                Bénédicte, aujourd’hui tu nous laisses dans une immense peine mais si tu peux l’entendre nous te disons du fond du cœur que tes amis prendront soin de Jean. Nous t’aimons  profondément et nous ne t’oublierons pas.<br>
                                Bénédicte adieu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        const text3 = `
        <div id="tribute-content">
            <h2>Marc TORDO</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-1.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 16/04/1948 -- 10/05/2023</h3>
            <h3>Entré au club en 1991</h3>
            <h3>Président de zone</h3>
            <h3>Président du club 1997/1998</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <h3>Témoignages des amis</h3>
                            <p>
                                <h4>Ange Defendini</h4>
                                Amitié, générosité, gentillesse, joie de vivre …c’était Marc.
                                Souvenir de certains repas à Villefranche entre amis, Jean-Paul Cesson, Gérard Grand, Michel Griselin,Jean-Paul Cutajar, Marc et moi, préparés par Marie Hélène qui ensuite nous laissait discrètement “entre hommes“. C'était le temps des jours heureux !

                                <h4>Jean-Paul Cutajar</h4>
                                Je veux écrire un petit mot pour rendre hommage à Marc,un homme de coeur et d’une gentillesse infinie. Les belles fêtes à Turini sont inoubliables.
                                Pensée tendre pour Marie Helene. Amicalement 

                                <h4>Joseph Coral</h4>
                                Avec Marc que j'ai remplacé comme popotier pendant quelques années nous avions une complicité car nous échangions nos découvertes, et  un souvenir inoubliable un soir à la sortie d'une réunion statutaire du Club au Negresco, j'ai trouvé dans la rue deux chaises Art nouveau, j'ai demandé à Marc de les charger dans son 4/4, Lisa les a restaurées et elles sont depuis près de dix  ans dans notre chambre d'amis, et chaque fois que je les regarde, elles me font penser à Marc.
                            </p>
                        </div>
                        <div class="images">
                            <img id="tribute-image" src="/public/media/images/in_memoriam/img-2a.jpg" style="width: 70%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="images" style="margin-top: 20px;">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-2b.jpg" style="width: 40%;">
            </div>
        </div>
        `;
        const text4 = `
        <div id="tribute-content">
            <h2>Gérard AUBRY</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-3a.jpg" alt="" style="width: 15%;" class="presentation-image">
            <h3>✝️ 02/10/1945  -- 10/05/2023</h3>
            <h3>Entré au club le 1 Juillet 2015</h3>
            <h3>Président des effectifs de 2016 à 2020</h3>
            <h3>Président du club : 2020/2021</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <h3>Témoignages des amis</h3>
                            <p>
                                <h4>Joseph Coral</h4>
                                Avec Gérard nous étions comme des jumeaux du point de vue professionnel, j'étais son aîné de quelques mois, et bien que nous ne nous soyons  jamais rencontrés avant le Lions Club, nous avons travaillé à Paris dans trois mêmes entreprises c'est dire qu'il me suivait à la trace. Avec les milliers d'entreprises à Paris 
                                c'est vraiment incroyable que nous ayons  exercé dans les trois mêmes entreprises sans jamais nous connaître avant notre retraite commune à Nice.
                            </p>
                        </div>
                        <div class="images">
                            <img id="tribute-image" src="/public/media/images/in_memoriam/img-3b.jpg" alt="" style="width: 70%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="images" style="margin-top: 20px;">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-3c.jpg" alt="" style="width: 30%;">
            </div>
        </div>
            `;
        const text5 = `
            <div id="tribute-content">
                <h2>Gerd HERMER</h2>
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-2.jpg" alt="Personne Disparue 1" style="width: 15%;" class="presentation-image">
                <h3>✝️ 14/05/43  -- 12/12/2021</h3>
                <h3>Entré au club en 1993</h3>
                <h3>Président du club : 1999/2000</h3>
                <div>
                    <div style=" text-align: left;">
                        <h3>Témoignages des amis</h3>
                        <p>
                            <h4>Alexandre Meinesz : Lors de la cérémonie d’inhumation de Gerd Hermer tenue le Mardi 21 décembre 2021 à l’Athanée de Nice</h4>
                            Les membres de mon club Lions Nice Doyen m’ont chargé d’évoquer quelques souvenirs que nous avons partagé avec Gerd qui était membre de notre club depuis 1993.
                            Il a été pendant plus de 20 ans un membre très actif, un pilier de notre club. Très présent à nos réunions statutaires mais aussi aux déjeuners hebdomadaires du mardi au restaurant l’Authentic rue Biscara. Lors de ces déjeuners conviviaux, certains d’entre nous, dont les regrettés Roger Suissa et Jean-Paul Cesson, formaient ce que nous appelions le contre-pouvoir. 
                            En 1999/2000, il a été un président brillant qui a alors marqué le club notamment par les deux voyages qu’il a organisés pour nos membres en Bavière. Il nous a fait découvrir avec enthousiasme son pays natal, ses villes et châteaux, la fête de la bière à Munich sans oublier la rencontre amicale avec un club Lions de Stuttgart. 
                            Je me souviens que lors d’un de ces voyages mémorables, j’avais eu l’outrecuidance d’attenter à sa fierté de bavarois. Il a voulu nous faire visiter de façon solennelle le monument glorieux du Befreiungshalle à Keilheim. Cette immense construction en forme de rotonde située au sommet d’une colline avait été édifiée pour commémorer les victoires allemandes sur celles de Napoléon 1er. En voyant de loin ce bâtiment cylindrique massif … je m’étais exclamé : mais c’est un panettone ! Cette anecdote est depuis devenue un souvenir qui nous a tant fait rire.
                            Nous avons tous tant apprécié Gerd, pour son humour, sa classe et sa gentillesse et surtout sa tolérance en supportant avec sourire nos blagues lourdes sur sa nature teutonne. 
                            Nous te disons tous avec une grande tristesse : Merci et Au revoir !

                            <h4>Jean Lemenicier : Llors de la cérémonie de dépôt des cendres  tenue le Mercredi  22 décembre 2021 au cimetière du Château à Nice</h4>
                            Cher Gerd,
                            A force de te savoir malade atteint de plein de pathologies diverses et de te voir, grâce aux soins vigilants de ceux qui te soignaient, en sortir toujours, nous finissions par te croire vraiment immortel.
                            Hélas, cette fois la maladie t’a emporté,  nous a pris au dépourvu et tu nous as quittés si vite.
                            Finies les interminables discussions que nous avions dans tous les domaines  et qui nous emmenaient souvent fort tard dans la journée. Ta vaste culture en tant de domaines, botanique, histoire, linguistique, informatique, musicale, et j’en passe, rendait tous les moments passés avec toi si enrichissants.  A  cet égard, bien des khâgneux auraient pu  envier ton vocabulaire...
                            Mais tu n’étais pas qu’un homme cultivé, un Pic de la Mirandole, tu étais aussi et surtout un ami, courtois, bien élevé, toujours prêt à rendre service. L’amour que tu portais à ta mère et  à tes enfants montrait à l’envi tes immenses qualités de cœur.
                            Tu étais de ces hommes qui n’ont compté que des amis, et malgré  ta  grande discrétion, convenons que c’est chose bien rare.
                            Tu incarnais  l’esprit du lionisme, tu étais le lionisme
                            Heureux comme Dieu en France, tu étais aussi Français qu’Allemand, ou mieux tu étais un harmonieux mélange des deux, mêlant les qualités du premier à celles du second. Mais c’est en France que  tu avais choisi de vivre, pour notre plus grand plaisir.
                            Au revoir donc, je ne veux pas dire à bientôt, mais quand le moment sera venu ce sont des hommes comme toi que je serai content  de retrouver là- haut et qui rendront ce passage plus aimable.

                            Et cette émouvante cérémonie s’est terminée , à l’initiative d’Ange Defendini, par un “SHORT APPLAUSE” , comme notre ami se plaisait à conclure un événement. 
                            Sa fille Sonja et son fils Alexandre nous ont ensuite conviés à partager un repas au St Paul, place Garibaldi,  où Gerd avait l’habitude de se rendre.

                        </p>
                    </div>
                </div>
                <div class="images" style="margin-top: 20px;">
                    <img id="tribute-image" src="/public/media/images/in_memoriam/img-4b.jpg" style="width: 50%;">
                </div>
            </div>
            `;
        const text6 = `
        <div id="tribute-content">
            <h2>Roger SUISSA</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-5.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 12/12/2021</h3>
            <h3>Compagnon de Melvin Jones</h3>
            <h3>Entré au club en 1987</h3>
            <h3>Président du club : 2004</h3>
            <div class="images">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-5b.jpg" style="width: 70%;">
            </div>
        </div>
            `;
        const text7 = `
        <div id="tribute-content">
            <h2>Leo Vander Laenen</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-6.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 24/06/1928  -- 16/02/2020</h3>
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <h3>Témoignages des amis</h3>
                            <p>
                                <h4>Alexandre Meinesz</h4>
                                Leo Vander Laenen est entré au club avec sa compagne Lieve Van As en novembre 2018. C'est à la suite d'une foire au livres du club que le couple a souhaité
                                s'inscrire à "Nice Doyen". Pratiquant couramment le néerlandais, langue principale de Leo et Lieve (Ils savent parler lire et écrire 6 autres langues), j'ai été leur parrain.
                                C'était un notaire qui a exercé en Belgique flammande à Tongerlo. Il a été membre et président du club Lions de Mol-Geel de 1969 à 1998.
                                En 1999, il rejoignit Nice pour y habiter définitivement avec Lieve.
                                Durant les années où il a participé avec assiduité aux réunions du club, tous se souviennent de cet homme affable, discret et souriant.
                                Lors des réunions statutaires avec épouses ceux qui ont pu discuter avec lui ont été surpris par sa culture, ses connaissances et son humour.
                                Son grand âge, sa santé quelque peu défaillante ne lui ont pas permis de devenir un membre actif mais il avait retrouvé dans notre club l'ambianceLions à laquelle il s'était imprégné pendant
                                20 ans en Belgique.quelques semaines avant son décès, malgré des complications handicapantes de son état de santé, il avait tenu avec courage à venir à la statutaire de Janvier 2020 
                                au restaurant l'Ovale. Durant le repas, il a pu une dernière fois venir avec plaisir gouter l'amitié qui nous rasssemble.
                            </p>
                        </div>
                        <div class="images">
                            <img id="tribute-image" src="/public/media/images/in_memoriam/img-6b.jpg" style="width: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            `;
        const text8 = `
        <div id="tribute-content">
            <h2>Henri Helly</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-7a.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 30/06/2016</h3>
            <h3>Entré au club en 1969</h3>
            <h3>Président du club : 1980</h3>
            <div class="images">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-7b.jpg" style="width: 70%;">
            </div>
        </div>
            `;
        const text9 = `
        <div id="tribute-content">
            <h2>Jean Paul Cesson <h3>dit JPC</h3></h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-8.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 29/08/2016</h3>
            <h3>Entré au club en 1985</h3>
            <h3>Président du club : 1996/1997</h3>
            <h3>Compagnon de Melvin Jones</h3>
            <h3>Secrétaire du District 103 CC</h3>
            <h3>Membre actif du contre-pouvoir qui siégeait tous les mardi à l'Authentic</h3>
        
            <div>
                <div class="body-text">
                    <div class="container">
                        <div class="text">
                            <h3>Témoignages des amis</h3>
                            <p>
                                <h4>Ange Defendini</h4>
                                A la demande de son épouse Josiane, j’ai dispersé ses cendres sur cette île qu’il aimait tant, au Cap Sagro dans le Cap Corse, au pied du petit phare dont je joins la photo.
                                Et quand le soir j’emprunte cette route, le scintillement du phare le rappelle à mon souvenir…….C’était mon ami…..
                            </p>
                        </div>
                        <div class="images">
                            <img id="tribute-image" src="/public/media/images/in_memoriam/img-8b.jpg" style="width: 80%;">
                        </div>
                    </div>
            </div>
            <div class="images image-container" style="margin-top: 20px;align-items: top !important;">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-8c.jpg" style="width: 40%;margin:0 10px">
                <img id="tribute-image" src="/public/media/images/in_memoriam/img-8d.jpg" style="width: 40%;margin:0 10px" class="image2">
            </div>
        </div>
            `;
        const text10 = `
        <div id="tribute-content">
            <h2>Jacques Cornil</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-9.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 27/08/2016</h3>
            <h3>Entré au club en 1963</h3>
            <h3>Président du club : 1977</h3>
        </div>
            `;
        const text11 = `
        <div id="tribute-content">
            <h2>Thomas Castellano</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-10.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 10/12/2017</h3>
            </div>
            `;
        const text12 = `
        <div id="tribute-content">
            <h2>Jacques Estadas</h2>
            <img id="tribute-image" src="/public/media/images/in_memoriam/img-11.jpg" style="width: 15%;" class="presentation-image">
            <h3>✝️ 26/08/2016</h3>
            <h3>Entré au club en 1956</h3>
            <h3>Président du club : 1979</h3>
            </div>
            `;
        const text13 = `        
        <div id="tribute-content">
            <h2 style="margin-top: 100px;">N’oublions pas non plus d’autres amis disparus depuis plus longtemps …</h2>
            <h3>Fernand AGRATI, Claude ROTH, Jacky BENHAMOU, Bernard BOUCHAUD, Roger MAZUIR ………</h3>
        </div>`;
        const texts = [
            text0,
            text1,
            text2,
            text3,
            text4,
            text5,
            text6,
            text7,
            text8,
            text9,
            text10,
            text11,
            text12,
            text13
        ];

        let currentIndex = -1;
        const tributeText = document.getElementById('tribute-container');
        const tributeButton = document.getElementById('tribute-button');
        const tributeButtonLeft = document.getElementById('tribute-button-left');

        tributeButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % texts.length;
            tributeText.innerHTML = texts[currentIndex];
        });
        tributeButtonLeft.addEventListener('click', () => {
            if (currentIndex == -1) {
                return
            }
            if (currentIndex == 0) {
                currentIndex = texts.length - 1;
            }else {
                currentIndex = (currentIndex - 1) % texts.length;
            }
        
            tributeText.innerHTML = texts[currentIndex];
        });
        let audioPlay = false;
        const audioElement = document.getElementById('audio');
        document.addEventListener('mousemove', () => {
            if (audioPlay === false) {
                audioElement.play();
                audioPlaying = true;
                audioPlay = true;
            }
        });
    </script>
</body>
</html>
