<div class="cart_container step_four">
  <div class="container">
    <h1>Twoje Dane</h1>
    <div class="cart-table_full_box d-flex flex-row">
      <div class="cart-table_box d-flex flex-column">
        <form class="cart-your-data-container">
          <div class="cart-your-data-container__col">
            <div class="title">
              <p>Dane do faktury</p>
            </div>
            <div class="inputs-container">
              <div class="input-slot">
                <label for="company">Firma</label>
                <input class="form-input" type="text" name="company" placeholder="Nazwa firmy">
              </div>
              <div class="input-slot">
                <label for="street">Ulica</label>
                <input class="form-input" type="text" name="street" placeholder="Polna 28">
              </div>
              <div class="input-slot">
                <label for="zipcode">Kod pocztowy</label>
                <input class="form-input" type="text" name="zipcode" placeholder="00-000">
              </div>
              <div class="input-slot">
                <label for="city">Miasto</label>
                <input class="form-input" type="text" name="city" placeholder="Kraków">
              </div>
              <div class="input-slot">
                <label for="tel">Telefon</label>
                <input class="form-input" type="text" name="tel" placeholder="666666666">
              </div>
              <div class="input-slot">
                <label for="nip">NIP</label>
                <input class="form-input" type="text" name="nip" placeholder="6521445820">
              </div>
            </div>
          </div>
          <div class="cart-your-data-container__col">
            <div class="title email">
              <p>Adres email</p>
              <p class="subtitle">na który zostanie wysłane potwierdzenia zamówienia</p>
            </div>
            <div class="inputs-container">
              <div class="input-slot">
                <label for="email">E-mail</label>
                <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" placeholder="mail@gmail.com">
              </div>
              <div class="input-slot">
                <label for="order-inner-number">Tutaj możesz wpisać swój wewnętrzny numer zamówienia</label>
                <input class="form-input" type="text" name="order-inner-number">
              </div>
              <div class="input-slot">
                <label for="comments">Uwagi</label>
                <textarea class="form-textarea" name="comments" id="comments" placeholder="Wiadomość"></textarea>
              </div>
            </div>
          </div>
          <div class="cart-your-data-container__col">
            <div class="title send-address">
              <div class="title-top">
                <p>Adres wysyłki</p>
                <label class="custom-checkbox-container">Wysyłka na adres fakturowy: <input type="checkbox" class="custom_input">
                  <span class="custom-checkbox-checkmark"></span>
                </label>
              </div>
              <div class="title-bottom">
                <label for="saved-address">Wybierz zapisany adres</label>
                <select name="saved-address" id="saved-address" class="form-select">
                  <option value="Adres, kod pocztowy, tel:666666666">Adres, kod pocztowy, tel:666666666</option>
                </select>
              </div>
            </div>
            <div class="inputs-container">
              <div class="input-slot">
                <label for="address-company">Firma *</label>
                <input class="form-input" type="text" name="address-company" placeholder="Nazwa firmy" required="">
              </div>
              <div class="input-slot">
                <label for="address-street">Ulica *</label>
                <input class="form-input" type="text" name="address-street " placeholder="Polna 28" required="">
              </div>
              <div class="input-slot">
                <label for="address-zipcode">Kod pocztowy *</label>
                <input class="form-input" type="text" name="address-zipcode" placeholder="00-000" required="">
              </div>
              <div class="input-slot">
                <label for="address-city">Miasto *</label>
                <input class="form-input" type="text" name="address-city" placeholder="Kraków" required="">
              </div>
              <div class="input-slot">
                <label for="address-contact-person">Osoba kontaktowa *</label>
                <input class="form-input" type="text" name="address-contact-person" placeholder="Jan Kowalski" required="">
              </div>
              <div class="input-slot">
                <label for="address-telephone-person">Telefon *</label>
                <input class="form-input" type="text" name="address-telephone-person" placeholder="666666666" required="">
              </div>
              <label class="add-address-chekbox custom-checkbox-container">
                <small>Dodaj adres do książki adresowej</small>
                <input type="checkbox" class="custom_input">
                <span class="custom-checkbox-checkmark"></span>
              </label>
            </div>
          </div>
        </form>
        <div class="bottom-cart-box-with-btn">
          <div class="bottom-cart-button">
            <a href="#" class="white-btn prev left-btn">
              <img src="./assets/icons/common/buttons/button_color_arrow.svg" alt="arrow icon" width="18" height="18"> Powrót </a>
          </div>
          <div class="bottom-cart-button right-btn">
            <a href="#" class="color-btn next">Dalej <img src="./assets/icons/common/buttons/button_white_arrow.svg" alt="arrow icon" width="18" height="18">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>