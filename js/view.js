/**
 * 填充图片
 * @param images 图片信息
 * @param baseDir 图片根目录
 * @param imgDivId 容器 id
 */
function fillImages(images, baseDir = '', imgDivId = 'imgDiv') {
    let imgDiv = $(`#${imgDivId}`);
    imgDiv.empty();
    for (let i = 0; i < images.length; i++) {
        let item = `<div class="card margin-8 shadow" data-groups="[&quot;${images[i]['type']}&quot;]">
                            <figure class="pp-effect"><img class="img-fluid"
                                                           src="${baseDir + images[i]['type'] + images[i]['src']}"
                                                           alt="${images[i]['desc']}"/>
                                <figcaption>
                                    <div class="h4">${images[i]['desc']}</div>
                                    <p>${images[i]['type']}</p>
                                </figcaption>
                            </figure>
                        </div>`
        imgDiv.append(item)
    }
}

function fillTypes(types, typeDivId = 'typeDiv') {
    let typeDiv = $(`#${typeDivId}`)
    typeDiv.empty();
    let styles = 'btn btn-primary pp-filter-button'
    let stylesChosen = 'btn btn-outline-primary pp-filter-button'
    for (let i = 0; i < types.length; i++) {
        let s = i === 0 ? styles : stylesChosen;
        let item = `<a class="${s}" href="#"
                               data-filter="${types[i]}">${types[i]}</a>`
        typeDiv.append(item)
    }
}