<?php  $this->load->view('admin/include/header.php') ?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Formulaire pour ajouter une formation</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php echo anchor( 'admin/devis', 'Retour' , ['class'=>"btn btn-default"] ); ?>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php echo form_open('admin/saveSubject',['class'=>'form-horizontal form-label-left']); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <label class="col-md-3 col-sm-3 col-xs-6">Quel est le type de votre structure?</label>
                                    <select class="col-md-6 col-sm-6 col-xs-12" name="structure" required cols="20">
                                        <option> </option>
                                        <option value="particulier">Particulier</option>
                                        <option value="association">Association</option>
                                        <option value="independant ou TPE">independant ou TPE</option>
                                        <option value="pme">PME</option>
                                        <option value="grande entreprise ou groupe">Grande entreprise ou Groupe</option>
                                        <option value="organisme">Organisme</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <label class="col-md-3 col-sm-3 col-xs-6">Avez-vous déjà un nom de domaine?</label>
                                    <select class="col-md-6 col-sm-6 col-xs-12" required name="domaine" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="hebergement" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Disposez-vous d'un serveur d'hébergement?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="logo" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Avez-vous un logo?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="charteGraphique" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Avez-vous déjà une charte graphique?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <label>Quelle sera en moyenne la récurrence des mises à jour de contenu du site ? </label>
                                    <select class="single-input" required name="recurrence" cols="20">
                                        <option> </option>
                                        <option value="aucune">Aucune</option>
                                        <option value="annuelle">Annuelle</option>
                                        <option value="trimestrielle">Trimestrielle</option>
                                        <option value="semestrielle">Semestrielle</option>
                                        <option value="mensuelle">Mensuelle</option>
                                        <option value="bimensuelle">Bimensuelle</option>
                                        <option value="hebdomadaire">Hebdomadaire</option>
                                        <option value="journaliere">Journalière</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="texte" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Fournissez-vous des textes pour les pages de votre site Internet ?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="medias" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Fournissez-vous des images ou d'autres médias pour les pages de votre site ?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <label>A combien estimez-vous le nombre de pages de votre futur site Internet ?</label>
                                    <select class="single-input" required name=nbpage cols="20">
                                        <option> </option>
                                        <option value="moins10">moins de 10</option>
                                        <option value="10 à 50">de 10 à 50</option>
                                        <option value="50 à 100">de 50 à 100 </option>
                                        <option value="100 à 200">de 100 à 200 </option>
                                        <option value="200 à 500">de 200 à 500</option>
                                        <option value="plus de 500">plus de 500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="internaute" cols="20">
                                        <option> </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    <label>Les internautes pourront-ils s'inscrire ou se connecter à votre site pour gérer des informations ?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <label>Dans combien de langues supplémentaires le site devra t'il être traduit ?</label>
                                    <select class="single-input" required name="langue" cols="20">
                                        <option> </option>
                                        <option value="aucune">aucune</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="plus de 10">plus de 10</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                
                                <div>
                                    <div class="row">
                                        <h6 class="text text-center">Quels modules souhaitez-vous voir apparaître sur votre site Internet ?</h6>
                                    </div>
                                    <hr>
                                    <div class="row" style="">
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Administration">
                                            <label for="md">Administration</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Actualite">
                                            <label for="md">Actualité</label>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Formulaire de contact">
                                            <label for="md">Formulaire de contact</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Formulaire de devis">
                                            <label for="md">Formulaire de devis</label>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Catalogue ou annuaire">
                                            <label for="md">Catalogue ou annuaire</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="E-commerce">
                                            <label for="md">E-commerce</label>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Paiement en ligne">
                                            <label for="md">Paiement en ligne</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Galerie photo ou vidéo">
                                            <label for="md">Galerie photo ou vidéo</label>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Bouton de partage social">
                                            <label for="md">Bouton de partage social</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Moteur de recherche">
                                            <label for="md">Moteur de recherche</label>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Vote et commentaire ">
                                            <label for="md">Vote et commentaire</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Sondage">
                                            <label for="md">Sondage</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Chat et forum">
                                            <label for="md">Chat et forum</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Livre d'or">
                                            <label for="md">Livre d'or</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Calendrier ou planning">
                                            <label for="md">Calendrier ou planning</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Newsletter">
                                            <label for="md">Newsletter</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox"  name="modules[]" id="md" value="Statistiques">
                                            <label for="md">Statistiques</label>
                                        </div>
                                        
                                        

                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <select class="single-input" required name="nbmodule" cols="20">
                                        <option> </option>
                                        <option value="aucun">aucun</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="plus de 10">plus de 10</option>
                                    </select>
                                    <label>Combien d'autres modules pensez-vous qu'il faudra concevoir ?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <textarea class="single-input" required name="projet" cols="20" rows="10"></textarea>
                                    <label class="text text-danger">Décrivez votre projet</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="section-title text-center">
                            <h3>Indiquez vos coordonnées</h3>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="prenom" class="single-input">
                                        <label>Prenom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="nom" class="single-input">
                                        <label>Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="soc" class="single-input">
                                        <label>Sociéte</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="adr" class="single-input">
                                        <label>Adresse</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text"  name="cp" class="single-input">
                                        <label>Code Postal</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="ville" class="single-input">
                                        <label>Ville</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="tel" required name="tel" class="single-input">
                                        <label>Téléphone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" required name="mail" class="single-input">
                                        <label>E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                  <button  type="submit" class="btn btn-blue">Enregistrer</button>
                                </div> 
                            </div>
                        </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php  $this->load->view('admin/include/footer.php') ?>
