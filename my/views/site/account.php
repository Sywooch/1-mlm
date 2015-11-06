<?php
$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>

                   <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../mertonic/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Александр Иванов </div>
                                        <div class="profile-usertitle-job"> Новичек </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">Следовать</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Написать</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="page_user_profile_1.html">
                                                    <i class="icon-home"></i> Профиль </a>
                                            </li>
                                            <li class="active">
                                                <a href="page_user_profile_1_account.html">
                                                    <i class="icon-settings"></i> Настройки аккаунта </a>
                                            </li>
                                            <li>
                                                <a href="page_user_profile_1_help.html">
                                                    <i class="icon-info"></i> Помощь </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> Projects </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Tasks </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Uploads </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class="profile-desc-title">About Marcus Doe</h4>
                                        <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-twitter"></i>
                                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-facebook"></i>
                                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
									
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings"></i>
                                        <span class="caption-subject font-purple-soft bold uppercase">Настройки профиля</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Персональные данные </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Изменение аватара </a>
                                        </li>
										<li>
                                            <a href="#tab_1_3" data-toggle="tab"> Настройки приватности </a>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <form role="form" action="#">
                                                            <div class="form-group">
                                                <label>Имя</label>
                                                <div class="input-icon">
                                                    <i class="icon-user"></i>
                                                    <input type="text" class="form-control" placeholder="Александр"> </div>
                                                            </div>
                                                            <div class="form-group">
                                                <label>Фамилия</label>
                                                <div class="input-icon">
                                                    <i class="icon-user"></i>
                                                    <input type="text" class="form-control" placeholder="Иванов"> </div>
                                            </div>
											<div class="form-group">
                                                <label>Ваш em@il</label>
                                                <div class="input-icon">
                                                    <i class="icon-envelope-open"></i>
                                                    <input type="text" class="form-control" placeholder="example@gmail.com"> </div>
                                            </div>
                                                            <div class="form-group">
                                                <label>Номер телефона</label>
                                                <div class="input-icon">
                                                    <i class="icon-call-end"></i>
                                                    <input type="text" class="form-control" placeholder="+38 (093) 587 45 87"> </div>
                                            </div>
                                                            <div class="form-group">
                                                <label>Ваш skype</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-skype"></i>
                                                    <input type="text" class="form-control" placeholder="Логин skype"> </div>
                                            </div>
                                                            <div class="form-group">
                                                <label>Ваш номер кошелька</label>
                                                <div class="input-icon">
                                                    <i class="icon-wallet"></i>
                                                    <input type="text" class="form-control" placeholder="Perfect money или Payeer"> </div>
                                            </div>
                                                            
                                                            <div class="form-group">
                                                            <label>Ваша компания</label>
                                                                 <select class="form-control">
                                                                   <option value="1">-выберите из списка-</option>
																   <option value="1" selected="">1й МЛМ ресурс</option>
																   <option value="2">4Life</option>
																   <option value="195">AIR</option>
																   <option value="123">ATG Best</option>
																   <option value="116">Agel</option>
																   <option value="41">AlfaReserve</option>
																   <option value="60">AliveMatrix</option>
																   <option value="82">AliveMax</option>
																   <option value="97">All Together</option>
																   <option value="3">Amway</option>
																   <option value="69">ArgentGlobalNetwork</option>
																   <option value="4">Art Life</option>
																   <option value="50">AstraTeam</option>
																   <option value="182">Atlantis Group</option>
																   <option value="155">Avon</option>
																   <option value="91">BIZCOM</option>
																   <option value="145">Batel</option>
																   <option value="133">BeepXtra</option>
																   <option value="172">Best2ndPayCheck</option>
																   <option value="124">Binary-Doubler</option>
																   <option value="22">Biomedis</option>
																   <option value="169">BitOK</option>
																   <option value="17">BrainAbundance</option>
																   <option value="137">Business Toolbox</option>
																   <option value="159">BusinessNetwork</option>
																   <option value="181">Carelle</option>
																   <option value="166">Cash Back Club</option>
																   <option value="105">Chain-income</option>
																   <option value="126">Club 16</option>
																   <option value="39">Colors of Life</option>
																   <option value="93">Conligus</option>
																   <option value="121">CrimeaBux</option>
																   <option value="128">DALYFIN Personal Banking</option>
																   <option value="74">DirectPayBiz</option>
																   <option value="115">Dom-Land</option>
																   <option value="44">DubLi</option>
																   <option value="46">Econix</option>
																   <option value="102">EmGoldex</option>
																   <option value="152">Evolution</option>
																   <option value="144">FFG System</option>
																   <option value="113">FGXpress</option>
																   <option value="1038">FM GROUP WORLD</option>
																   <option value="160">FNC</option>
																   <option value="53">Faberlic</option>
																   <option value="175">Family Digital Market</option>
																   <option value="148">Farmasi</option>
																   <option value="143">Financial Surfing</option>
																   <option value="62">FireFlies</option>
																   <option value="163">Fohow</option>
																   <option value="89">FollovvMe</option>
																   <option value="18">Forever Living Products</option>
																   <option value="119">Forex MMCIS Group</option>
																   <option value="150">G-Time</option>
																   <option value="96">GBSIE</option>
																   <option value="157">GEM Technologies</option>
																   <option value="40">GNetwork</option>
																   <option value="94">GO-WAVE</option>
																   <option value="26">GVO</option>
																   <option value="66">GalaxyMate</option>
																   <option value="61">GeoMetrika</option>
																   <option value="11">GetEasy</option>
																   <option value="76">Global1Entertainment</option>
																   <option value="64">Globus Intercom</option>
																   <option value="85">GoldAdMatrix</option>
																   <option value="860">GoldenFish</option>
																   <option value="101">Green World</option>
																   <option value="78">HELIX Capital </option>
																   <option value="104">Harika-Auto</option>
																   <option value="138">Hash Profit</option>
																   <option value="37">HelpMeToStart</option>
																   <option value="16">Herbalife</option>
																   <option value="19">ICS MIDAS</option>
																   <option value="58">InWeb24</option>
																   <option value="103">Invest100Web</option>
																   <option value="136">J-Company</option>
																   <option value="29">Jeunesse</option>
																   <option value="23">Kyani</option>
																   <option value="20">LR Health and Beauty Syst</option>
																   <option value="24">LibertaGia</option>
																   <option value="42">LiderLand</option>
																   <option value="43">LifePharm Global</option>
																   <option value="127">Light Start Helper</option>
																   <option value="164">Lucky Home</option>
																   <option value="7">MaryKay</option>
																   <option value="79">MaxiMoneyClub</option>
																   <option value="141">Mikrocredit</option>
																   <option value="110">MityTarget</option>
																   <option value="129">Monavie</option>
																   <option value="109">MoneyBirds</option>
																   <option value="177">MoneyMonster</option>
																   <option value="21">NL International</option>
																   <option value="183">Neways</option>
																   <option value="178">NextLevelClub</option>
																   <option value="146">Niordee</option>
																   <option value="95">Nova Sphera</option>
																   <option value="77">OCEAN-2014</option>
																   <option value="158">Omega System</option>
																   <option value="118">OrganoGold</option>
																   <option value="8">Oriflame</option>
																   <option value="186">PaidVerts</option>
																   <option value="73">Palladium Minning Investm</option>
																   <option value="75">Palmary</option>
																   <option value="174">Perfect Club</option>
																   <option value="193">Perfect Organics</option>
																   <option value="32">Planet of Dreams</option>
																   <option value="36">Primers</option>
																   <option value="180">Qupall</option>
																   <option value="187">QwertyPay</option>
																   <option value="170">RA Group</option><option value="80">Real Money</option>
																   <option value="14">RevStarGlobal</option><option value="27">RisingStar</option>
																   <option value="33">Rosen Rings</option><option value="156">RuFund</option>
																   <option value="1056">SBPViP</option><option value="872">SETinBOX 1</option>
																   <option value="63">SETinBOX 2</option><option value="99">SFI</option>
																   <option value="184">SUPER-CUP</option><option value="142">Shopping Sherlock</option>
																   <option value="83">SilverStep</option><option value="134">Sisel international</option>
																   <option value="49">SkinnyBodyCare</option><option value="47">SkyWay (RSW-SYSTEMS)</option>
																   <option value="135">StartsInvest</option><option value="147">Stemtech</option>
																   <option value="125">Stiforp Profits</option><option value="176">Success Tree</option>
																   <option value="38">Swissgolden</option><option value="88">TWOY</option><option value="48">Talk Fusion</option>
																   <option value="168">TauNigma</option><option value="72">TaxiMoney</option>
																   <option value="100">Team Klondayk</option><option value="106">The Legends Network</option>
																   <option value="10">TianDe</option><option value="199">Tiens Group Co. Ltd</option>
																   <option value="192">UDS Game</option><option value="149">Ultimate Cycler</option>
																   <option value="12">Unicity</option><option value="108">Universe</option><option value="31">VIDCOMMX</option>
																   <option value="65">VIS Energy</option><option value="130">Vision</option><option value="55">VisionPay</option>
																   <option value="131">Vteme</option><option value="197">WOODBROOK IMPEX LP</option>
																   <option value="45">Webtransfer</option><option value="71">WhitePinsPlus</option>
																   <option value="30">WinnersAcademy</option><option value="112">WorkBee</option>
																   <option value="52">Workle</option><option value="13">World GN</option><option value="162">X100K</option>
																   <option value="153">Youngevity</option><option value="196">ZUKUL</option><option value="151">Zinzino</option>
																   <option value="25">i-Butler</option><option value="15">iWowWe</option>
																   <option value="132">Академия Богатого Папы</option><option value="888">Академия Успеха</option>
																   <option value="191">АльтКлуб</option><option value="67">Бизнес Инкубатор ЗЕВС</option>
																   <option value="198">БлагоДарю Клуб</option><option value="28">Бумеранг Международный Це</option>
																   <option value="165">Видеокурс: Секреты продаж</option><option value="59">Виртуальная Страна Дария</option>
																   <option value="84">ВсеВместе</option><option value="173">Всем Миром</option>
																   <option value="5">Дар Русинів (Україна)</option><option value="70">ДариБери</option>
																   <option value="114">Дженезис Глобал Нетворк</option><option value="161">Дисконтная система Друзья</option>
																   <option value="90">Дом ДаРа</option><option value="54">Дружная Семья</option><option value="111">Едоша</option>
																   <option value="154">Империя Разума</option><option value="179">Клуб Богатство</option>
																   <option value="34">Клуб Эврика</option><option value="92">Копилкин</option>
																   <option value="6">Коралловый Клуб</option><option value="35">Международный Автоклуб</option>
																   <option value="56">Меркурий Взаимный Фонд</option><option value="140">Микстопшоп</option>
																   <option value="777">Миллион Друзей</option><option value="68">Мой Дом</option>
																   <option value="86">НБФ "ПАК"</option><option value="185">НПЦРИЗ</option>
																   <option value="51">Новая Эра</option><option value="107">ОмегаВит</option>
																   <option value="81">Примафлора</option><option value="122">Родник Здоровья</option>
																   <option value="9">Сибирское Здоровье</option><option value="167">Система Оплаты Кредитов</option>
																   <option value="171">Сова Холистинг Корпорация</option><option value="57">Социальная сеть SBNLife</option>
																   <option value="98">Сто Кусков</option><option value="1011">Супер-пупер интернешнл</option>
																   <option value="120">ТвойАвто</option><option value="555">ТурКофе</option>
																   <option value="87">Финансовая группа "Легион</option><option value="117">Хэдж-фонд EIAF</option>
																   <option value="194">Ценобой МПО</option><option value="139">Эскалат</option>       
																   </select>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                <label>Ваша рефереальная ссылка</label>
                                                <div class="input-icon">
                                                    <i class="icon-link"></i>
                                                    <input type="text" class="form-control" placeholder="Если продвигаете 1 компанию.."> </div>
                                            </div>
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> Сохранить изменения </a>
                                                                <a href="javascript:;" class="btn default"> Отменить </a>
                                                            </div>
                                                        </form>
												
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <p> Здесь Вы можете поменять аватар своего профиля. Для этого нажмите на кнопку "Выбрать картинку" и выберите желаемую, а затем нажмите кнопку "Изменить". </p>
                                                        <form action="#" role="form">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Выбрать картнику </span>
                                                                            <span class="fileinput-exists"> Изменить </span>
                                                                            <input type="file" name="..."> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Удалить </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">Важно! </span>
                                                                    <span style="left: 8px;position: relative;">
																	Картинки поддерживаются в последних версиях браузеров : Firefox, Chrome, Opera, Safari and Internet Explorer 10.
																	</span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Применить </a>
                                                                <a href="javascript:;" class="btn default"> Отменить </a>
                                                            </div>
                                                        </form>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_3">
                                             <form action="#">
                                                            <table class="table table-light table-hover">
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                    <td>
                                                                        <label class="uniform-inline">
                                                                            <input type="checkbox" value="" /> Yes </label>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn red"> Сохранить изменения </a>
                                                                <a href="javascript:;" class="btn default"> Отменить </a>
                                                            </div>
                                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->