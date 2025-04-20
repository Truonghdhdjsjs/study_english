export function Lazyloading()
{
    const LoadImage = document.querySelectorAll("img");
    [...LoadImage].forEach(item => item.classList.add("lazyload"));
    const lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazyload"
    })
}