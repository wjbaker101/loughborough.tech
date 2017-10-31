<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Freshers 2017!</title>
        
        <?php displayHead(); ?>
        
        <style>
            .small-width
            {
                width: 300px;
                max-width: 100%:
            }
            .big-width
            {
                width: 600px;
                max-width: 100%;
            }
        </style>
        
        <script>
            (() =>
            {
                window.addEventListener('load', () =>
                {
                    const submitButton = document.querySelector('.submit-button');

                    submitButton.addEventListener('click', () =>
                    {
                        if (submitButton.disabled) return;

                        if (document.querySelector('.input-first-name').value.length === 0)
                        {
                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed_firstname', 'First name cannot be blank.', 'ERROR'));
                            return;
                        }

                        if (document.querySelector('.input-surname').value.length === 0)
                        {
                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed_surname', 'Surname cannot be blank.', 'ERROR'));
                            return;
                        }

                        if (document.querySelector('.input-email').value.length === 0)
                        {
                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed_email', 'Email cannot be blank.', 'ERROR'));
                            return;
                        }

                        const pastExpCheckedYes = document.querySelector('#past-exp-checkbox-yes').checked;
                        const pastExpCheckedNo = document.querySelector('#past-exp-checkbox-no').checked;
                        const longProjectCheckedYes = document.querySelector('#long-project-checkbox-yes').checked;
                        const longProjectCheckedNo = document.querySelector('#long-project-checkbox-no').checked;

                        if (!pastExpCheckedYes && !pastExpCheckedNo)
                        {
                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed_pastexpchecked', 'Must have a checkbox checked for past experience.', 'ERROR'));
                            return;
                        }

                        if (!longProjectCheckedYes && !longProjectCheckedNo)
                        {
                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed_longprojectchecked', 'Must have a checkbox checked for long project interest.', 'ERROR'));
                            return;
                        }

                        submitButton.disabled = true;
                        submitButton.classList.add('loading');

                        const onComplete = () =>
                        {
                            submitButton.classList.remove('loading');
                        };

                        const parameters =
                        {
                            firstname: document.querySelector('.input-first-name').value,
                            surname: document.querySelector('.input-surname').value,
                            email: document.querySelector('.input-email').value,
                            pastexpchecked: (pastExpCheckedYes ? 1 : (pastExpCheckedNo ? 0 : -1)),
                            longprojectchecked: (longProjectCheckedYes ? 1 : (longProjectCheckedNo ? 0 : -1)),
                        };

                        techSoc.ajax.onSuccess(response =>
                        {
                            onComplete();
                            
                            console.log(response);

                            techSoc.displayInfoMessage('.output-message', response);

                            if (response.code === 'success')
                            {
                                window.location.href = 'thanks.php';
                            }
                            else
                            {
                                submitButton.disabled = false;
                            }
                        })
                        .onFailure(status =>
                        {
                            onComplete();
                            submitButton.disabled = false;

                            techSoc.displayInfoMessage('.output-message', techSoc.createResponse('failed', `Unable to sumbit. Failed with error ${status}.`, 'ERROR'));
                        })
                        .send({ method: 'POST', url: 'submit-form.php', parameters: parameters });
                    });
                });
            })();
        </script>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section text-centered">
                    <h1>Freshers 2017</h1>
                    <p>If you would like to join our society, enter your details below.</p>
                </section>
                <section class="section vpadding-regular">
                    <h3>First Name:</h3>
                    <p><input type="text" class="input-first-name small-width" autofocus></p>
                    <h3>Surname:</h3>
                    <p><input type="text" class="input-surname small-width"></p>
                    <h3>Email:</h3>
                    <p><input type="text" class="input-email big-width" placeholder="e.g. uni.email@student.lboro.ac.uk"></p>
                    <h3>Do you have past experience in programming?</h3>
                    <p>
                        <input id="past-exp-checkbox-yes" type="radio" class="hidden" name="past-exp">
                        <label for="past-exp-checkbox-yes"></label><span class="unselectable">yes</span>
                    </p>
                    <p>
                        <input id="past-exp-checkbox-no" type="radio" class="hidden" name="past-exp">
                        <label for="past-exp-checkbox-no"></label><span class="unselectable">no</span>
                    </p>
                    <h3>Is a long term project of interest to you?</h3>
                    <p>
                        <input id="long-project-checkbox-yes" type="radio" class="hidden" name="long-project">
                        <label for="long-project-checkbox-yes"></label><span class="unselectable">yes</span>
                    </p>
                    <p>
                        <input id="long-project-checkbox-no" type="radio" class="hidden" name="long-project">
                        <label for="long-project-checkbox-no"></label><span class="unselectable">no</span>
                    </p>
                    <p class="text-centered"><button class="submit-button">Submit</button></p>
                    <p class="info-message text-centered">
                        <i class="icon info"></i>
                        <span class="output-message cell-middle">Enter your details, then click the button to submit.</span>
                    </p>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>