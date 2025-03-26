<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a> |

            <a href="<?= URLROOT; ?>/sneakers/index">Overzicht sneakers</a> |

            <a href="<?= URLROOT; ?>/horloges/index">Overzicht horloges</a> |

            <a href="<?= URLROOT; ?>/torens/index">Overzicht torens</a> |
            
            <a href="<?= URLROOT; ?>/speakers/index">Overzicht Speakers</a> |

            <a href="<?= URLROOT; ?>/zangeres/index">Overzicht Zangeres</a> |

            <a href="<?= URLROOT; ?>/bucketlist/index">Overzicht Bucketlist</a> |

            <a href="<?= URLROOT; ?>/vulkaan/index">Actiefste Vulkaan</a>

        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>